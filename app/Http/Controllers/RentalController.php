<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Rental;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class RentalController extends Controller
{
    public function index(){
        return view('home');
    }

    public function indexrental(Car $car){
        return view('rental', [
            'car' => Car::where('id')->get()
        ]);
    }

    public function show(Car $car){
        return view('rental', compact('car'));
    }

    public function checkout(Car $car)
    {
        $user = Auth::user();

        return view('checkout', compact('car', 'user'));
    }

    // app/Http/Controllers/RentalController.php

    public function store(Request $request)
    {

            $validatedData = $request->validate([
                'cars_id' => 'required',
                'user_id' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'paymentMethod' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
            ]);

            Rental::create($validatedData);

            return redirect('/car')->with('success', 'Checkout berhasil!');

    }

}
