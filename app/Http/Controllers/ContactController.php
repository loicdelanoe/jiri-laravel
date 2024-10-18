<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Intervention\Image\Laravel\Facades\Image;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Auth::user()->contacts;

        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view("contacts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactStoreRequest $request)
    {
        if ($request->hasFile('image')) {
            // Original picture
            $path = $request->file('image')->store('contacts/' . Auth::id() . '/' . 'original');

            // Get picture from form
            $avatar = $request->file('image');

            // Get sizes from config file
            $sizes = Config::get('photos.sizes');
            $image = Image::read($avatar);

            foreach ($sizes as $size => $value) {
                // Avoid original
                if (!is_int($value)) {
                    continue;
                }

                // Define the directory where the image will be saved
                $directory = public_path('storage/contacts/' . Auth::id() . '/' . $size . '/');

                // Create the directory if it does not exist
                if (!File::exists($directory)) {
                    File::makeDirectory($directory, 0755, true); // Create directory with proper permissions
                }

                $image->cover($value, $value)
                    ->save(public_path('storage/contacts/' . Auth::id() . '/' . $size . '/' . $value . '-' . $avatar->hashName()));
            }
        }

        $contact = Contact::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "user_id" => $request->user_id,
            "image" => $path ?? null,
        ]);

        return to_route('contact.show', $contact);
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        $images = [];

        $sizes = Config::get('photos.sizes');

        foreach ($sizes as $size => $value) {
            if (!is_int($value)) {
                continue;
            }
            $images[] = [
                $value => Storage::url('contacts/' . Auth::id() . '/' . $size . '/' . $value . '-eV6O8uhnHBjUeCqqlczo5EmNbfgg27U7v4FwqT0G.jpg')
            ];
        }

        dd($images);

        return view('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view("contacts.edit", compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactStoreRequest $request, Contact $contact)
    {
        $contact->update($request->validated());

        return to_route("contact.show", $contact);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return to_route('contact.index');
    }
}
