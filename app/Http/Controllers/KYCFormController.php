<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use App\Models\Address;
use App\Models\Bank;
use App\Models\Document;
use App\Models\Family;
use App\Models\Occupation;
use App\Models\User;
use App\Traits\ImageUploadTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KYCFormController extends Controller
{
    use ImageUploadTrait;
    public function personalInformation()
    {
        return view('pages.personal-information');
    }

    public function personalInformationStore(Request $request)
    {
        // dd($request->all());
        $request->validate([

            'name' => ['required', 'string'],
            'email' => ['required'],
            'client_mobile' => ['required'],
            'client_alt_mobile' => [],
            'client_dob_ad' => ['required', 'date_format:d/m/Y'],
            'client_dob_bs' => ['required', 'date_format:d/m/Y'],

            // 'client_nationality' => ['required', 'string'],
            'client_ctzn_num' => ['required', 'string'],
            'client_ctn_bs' => ['required', 'date_format:d/m/Y'],
            'client_ctn_ad' => ['required', 'date_format:d/m/Y'],

            'client_nid' => ['string'],
            'client_pan' => ['string'],
            'boid' => ['string'],

        ]);

        $user = new User();


        $user->name = $request->name;
        $user->email = $request->email;

        $user->client_mobile = $request->client_mobile;
        $user->client_alt_mobile = $request->client_alt_mobile;
        $user->client_gender = $request->client_gender;


        // $user->client_dob_ad = $request->client_dob_ad;
        $user->client_dob_ad = Carbon::createFromFormat('d/m/Y', $request->client_dob_ad)->format('Y-m-d');
        // $user->client_dob_bs = $request->client_dob_bs;
        $user->client_dob_bs = Carbon::createFromFormat('d/m/Y', $request->client_dob_bs)->format('Y-m-d');
        
        $user->client_nationality = "nepalese";
        $user->client_ctzn_num = $request->client_ctzn_num;
        $user->client_ctzn_district = $request->client_ctzn_district;

        // $user->client_ctn_bs = $request->client_ctn_bs;
        $user->client_ctn_bs = Carbon::createFromFormat('d/m/Y', $request->client_ctn_bs)->format('Y-m-d');
        // $user->client_ctn_ad = $request->client_ctn_ad;
        $user->client_ctn_ad = Carbon::createFromFormat('d/m/Y', $request->client_ctn_ad)->format('Y-m-d');

        $user->client_nid = $request->client_nid;
        $user->client_pan = $request->client_pan;
        $user->boid = $request->boid;

        $user->save();

        $request->session()->put('uid', $user->id);

        toastr()->success('User Created!');

        return redirect()->route('family');
    }

    public function family()
    {
        return view('pages.family');
    }
    public function familyStore(Request $request)
    {
        // dd($request->all());
        $request->validate([

            'father_name' => ['required', 'string'],
            'mother_name' => ['required', 'string'],
            'grandfather_name' => ['required', 'string'],

            'maritial_status' => ['required', 'string'],
            'is_minor' => ['required', 'string'],

            // 'spouse_name' => ['string'],
            // 'father_in_law_name' => ['string'],
            // 'mother_in_law_name' => ['string'],
            // 'son_name' => ['string'],
            // 'daughter_name' => ['string'],

            // 'guradian_name' => ['string'],
            // 'guardian_relation' => ['string'],
            // 'guardian_mobile' => ['string'],
            // 'guardian_email' => ['string'],

        ]);

        $family = new Family();
        $uid = session('uid');

        $family->uid = $uid; // NOT CHECKED
        $family->father_name = $request->father_name;
        $family->mother_name = $request->mother_name;
        $family->grandfather_name = $request->grandfather_name;
        $family->maritial_status = $request->maritial_status;
        $family->is_minor = $request->is_minor;


        if ($request->maritial_status !== "yes") {
            $family->spouse_name = $request->spouse_name;
            $family->father_in_law_name = $request->father_in_law_name;
            $family->mother_in_law_name = $request->mother_in_law_name;
            $family->son_name = $request->son_name;
        }

        if ($request->is_minor !== "yes") {
            $family->guradian_name = $request->guradian_name;
            $family->guardian_relation = $request->guardian_relation;
            $family->guardian_mobile = $request->guardian_mobile;
            $family->guardian_email = $request->guardian_email;
        }

        $family->save();

        // $request->session()->put('uid', $user->id);

        toastr()->success('User Created!');

        return redirect()->route('address');
    }

    public function address()
    {
        return view('pages.address');
    }

    public function addressStore(Request $request)
    {
        // dd($request->all());
        // Validate the request data
    $request->validate([
        'client_country' => 'required|string|max:255',
        'client_province' => 'required|string|max:255',
        'client_district' => 'required|string|max:255',
        'client_municipality' => 'required|string|max:255',
        'client_ward' => 'required|integer',
        'client_tole' => 'required|string|max:255',
        'client_landline' => 'required|string|max:20',
        'current_country' => 'nullable|string|max:255',
        'current_province' => 'nullable|string|max:255',
        'current_district' => 'nullable|string|max:255',
        'current_municipality' => 'nullable|string|max:255',
        'current_ward' => 'nullable|integer',
        'current_tole' => 'nullable|string|max:255',
        'current_landline' => 'nullable|string|max:20',
    ]);

    $uid = session('uid');

    // Save the permanent address
    $address = new Address();
    $address->uid = $uid; // NOT CHECKED

    $address->client_country = $request->client_country;
    $address->client_province = $request->client_province;
    $address->client_district = $request->client_district;
    $address->client_municipality = $request->client_municipality;
    $address->client_ward = $request->client_ward;
    $address->client_tole = $request->client_tole;
    $address->client_landline = $request->client_landline;

    // Save the current address if the checkbox is checked
    if ($request->has('checkbox-1')) {
        $address->current_country = $request->current_country;
        $address->current_province = $request->current_province;
        $address->current_district = $request->current_district;
        $address->current_municipality = $request->current_municipality;
        $address->current_ward = $request->current_ward;
        $address->current_tole = $request->current_tole;
        $address->current_landline = $request->current_landline;
    } else {
        $address->current_country = $request->client_country;
        $address->current_province = $request->client_province;
        $address->current_district = $request->client_district;
        $address->current_municipality = $request->client_municipality;
        $address->current_ward = $request->client_ward;
        $address->current_tole = $request->client_tole;
        $address->current_landline = $request->client_landline;
    }
    
    $address->save();
    // Redirect to the occupation page
    return redirect()->route('occupation');
    }

    public function occupation()
    {
        return view('pages.occupation');
    }

    public function occupationStore(Request $request)
{
    // dd($request->all());
    // Validate the form fields
    $request->validate([
        'occupation' => ['required'],
        'business_type' => ['required_if:occupation,business'],
        'organization_name' => ['required'],
        'organization_address' => ['required'],
        'designation' => ['required'],
        'employee_id' => ['required'],
        'income_range' => ['required'],
        'other_involvement' => ['required'],
        'other_organisation' => ['required_if:other_involvement,yes'],
        'other_designation' => ['required_if:other_involvement,yes']
    ]);

    // Create a new instance of the model
    $occupation = new Occupation(); // Replace 'Occupation' with the correct model name if different
    $uid = session('uid');

    // Assign the validated values to the model's attributes
    $occupation->uid = $uid;
    $occupation->occupation = $request->occupation;
    $occupation->business_type = $request->business_type;
    $occupation->organization_name = $request->organization_name;
    $occupation->organization_address = $request->organization_address;
    $occupation->designation = $request->designation;
    $occupation->employee_id = $request->employee_id;
    $occupation->income_range = $request->income_range;
    $occupation->other_involvement = $request->other_involvement;
    if($request->other_involvement === "yes"){
        $occupation->other_organisation = $request->other_organisation;
        $occupation->other_designation = $request->other_designation;
    }

    // Save the model to the database
    $occupation->save();

    // Redirect to the next step with a success message
    toastr()->success('Occupation info added');

    return redirect()->route('bank');
}

    public function bank()
    {
        return view('pages.bank');
    }

    public function bankStore(Request $request)
    {
        // dd($request->all());
        $request->validate([

            'account_type' => ['required'],
            'account_num' => ['required', 'string'],
            'bank_name' => ['required'],
            'bank_branch' => ['required', 'string'],

        ]);

        $bank = new Bank();
        $uid = session('uid');

        $bank->uid = $uid; // NOT CHECKED
        $bank->account_type = $request->account_type;
        $bank->account_num = $request->account_num;
        $bank->bank_name = $request->bank_name;
        $bank->bank_branch = $request->bank_branch;

        $bank->save();

        // $request->session()->put('uid', $user->id);

        toastr()->success('Bank Info Added');

        return redirect()->route('document');
    }

    public function document()
    {
        return view('pages.document');
    }

    public function documentStore(Request $request)
    {
        $request->validate([
            'passport_image' => ['image', 'required', 'max:2000'],
            'holding_selfie_image' => ['image', 'required', 'max:2000'],
            'citizenship_front_image' => ['image', 'required', 'max:2000'],
            'citizenship_back_image' => ['image', 'required', 'max:2000'],
            'signature_image' => ['image', 'required', 'max:2000'],

            'thumb_image' => ['image', 'required', 'max:2000'],
            'map_image' => ['image', 'required', 'max:2000'],
            'dmat_confirmation_image' => ['image', 'required', 'max:2000'],
            'pan_image' => ['image', 'required', 'max:2000'],

        ]);

        $document = new Document();
        $uid = session('uid');

        $document->uid = $uid; // NOT CHECKED
        $passport_image = $this->uploadImage($request, 'passport_image', 'uploads');
        $document->passport_image = $passport_image;

        $holding_selfie_image = $this->uploadImage($request, 'holding_selfie_image', 'uploads');
        $document->holding_selfie_image = $holding_selfie_image;

        $citizenship_front_image = $this->uploadImage($request, 'citizenship_front_image', 'uploads');
        $document->citizenship_front_image = $citizenship_front_image;

        $citizenship_back_image = $this->uploadImage($request, 'citizenship_back_image', 'uploads');
        $document->citizenship_back_image = $citizenship_back_image;

        $signature_image = $this->uploadImage($request, 'signature_image', 'uploads');
        $document->signature_image = $signature_image;

        $thumb_image = $this->uploadImage($request, 'thumb_image', 'uploads');
        $document->thumb_image = $thumb_image;

        $map_image = $this->uploadImage($request, 'map_image', 'uploads');
        $document->map_image = $map_image;

        $dmat_confirmation_image = $this->uploadImage($request, 'dmat_confirmation_image', 'uploads');
        $document->dmat_confirmation_image = $dmat_confirmation_image;

        $pan_image = $this->uploadImage($request, 'pan_image', 'uploads');
        $document->pan_image = $pan_image;

        $document->save();

        toastr('Created Successfully!', 'success');

        return redirect()->route('personal-information');
    }

    public function data(UserDataTable $dataTable){
        return $dataTable->render('data');
    }

    public function view(String $id){
        $user = User::findOrFail($id);
        $family = Family::findOrFail($id);
        $address = Address::findOrFail($id);
        $bank = Bank::findOrFail($id);
        $occupation = Occupation::findOrFail($id);
        $document = Document::findOrFail($id);
        return view('view-data', compact('user', 'family', 'address', 'bank', 'occupation', 'document'));
    }
}
