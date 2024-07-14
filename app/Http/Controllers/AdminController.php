<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use App\Models\Address;
use App\Models\Bank;
use App\Models\Document;
use App\Models\Family;
use App\Models\Occupation;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(UserDataTable $dataTable)
    {
        return $dataTable->render('admin.data');
    }

    public function view($id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Find related records where 'uid' matches the user's id
        $family = Family::where('uid', $user->id)->firstOrFail();
        $address = Address::where('uid', $user->id)->firstOrFail();
        $bank = Bank::where('uid', $user->id)->firstOrFail();
        $occupation = Occupation::where('uid', $user->id)->firstOrFail();
        $document = Document::where('uid', $user->id)->firstOrFail();

        // Pass the data to the view
        return view('admin.view-data', compact('user', 'family', 'address', 'bank', 'occupation', 'document'));
    }
}
