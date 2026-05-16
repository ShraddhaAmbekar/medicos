<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('backend.country.index', [
            'countries' => $countries
        ]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|string|max:255',
                'code' => 'required|string|max:3',
                'flag' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $imagename = '';

            if ($request->hasFile('flag')) {
                $image = $request->file('flag');
                $imagename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('country'), $imagename);
            }
            $country = new Country();
            $country->name = $request->name;
            $country->code = $request->code;
            $country->flag = $imagename ?? null;
            $country->save();
            return redirect()->route('countries')->with('success', 'Country created successfully.');
        }

        return view('backend.country.create');
    }

    public function update(Request $request, Country $country)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|string|max:255',
                'code' => 'required|string|max:3',
                'flag' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $country->update([
                'name' => $request->input('name'),
                'code' => $request->input('code'),
            ]);
            if ($request->hasFile('flag')) {
                $image = $request->file('flag');
                $imagename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('country'), $imagename);
                $country->flag = $imagename;
                $country->save();
            }
            return redirect()->route('countries')->with('success', 'Country updated successfully.');
        }
        return view('backend.country.update', ['country' => $country]);
    }

    public function delete(Country $country)
    {
        $country->delete();
        return redirect()->route('countries')->with('success', 'Country deleted successfully.');
    }

    public function imageupload($request)
    {
        $image = $request->file('file');
        $imagename = time() . $image->getClientOriginalName() . '.' . $image->extension();
        $image->move(public_path('rooms'), $imagename);
        return response()->json(['success' => $imagename]);
    }
}
