@extends('master')

@section('content')

<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center mt-20 px-6 py-8 mx-auto lg:py-0">
        <div class="w-full md:max-w-6xl bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-8 dark:bg-gray-800 dark:border-gray-700">
            <h2 class="mb-4 text-xl font-bold text-center leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                Terms and Conditions
            </h2>
            <div class="p-4">
                <p class="text-gray-500 dark:text-gray-400">
                    Account Opening and Maintenance
                    <br><br>
                    - Clients must complete all necessary documentation and provide valid identification to open a brokerage account.
                    <br>
                    - The broker reserves the right to accept or reject any application for opening an account without providing reasons.
                    <br><br>
                    Client Responsibilities
                    <br><br>
                    Clients are responsible for maintaining the confidentiality of their account details and for all activities conducted through their account.
                    Clients must inform the broker immediately of any unauthorized access or security breaches.
                    <br><br>
                    Transaction Execution
                    <br><br>
                    The broker will execute orders as per client instructions but does not guarantee execution at the specified price or time due to market conditions.
                    All transactions are subject to market regulations and trading hours.
                    <br><br>
                    Fees and Charges
                    <br><br>
                    Clients agree to pay all fees, commissions, and charges associated with their trading activities as outlined in the fee schedule.
                    The broker reserves the right to change the fee structure with prior notice to clients.
                    <br><br>
                    Risk Disclosure
                    <br><br>
                    Clients acknowledge that investing in stocks involves substantial risk, including the potential loss of the principal amount invested.
                    The broker is not liable for any losses incurred by clients due to market fluctuations or other factors.
                    <br><br>
                    Account Funding and Withdrawals
                    <br><br>
                    Clients must ensure their accounts are sufficiently funded to cover transactions and associated fees.
                    Withdrawal requests will be processed in accordance with the broker's policies and may take up to a specified number of business days.
                    <br><br>
                    Compliance with Laws
                    <br><br>
                    Clients agree to comply with all applicable laws, regulations, and rules governing stock trading and the use of the brokerage services.
                    The broker reserves the right to terminate accounts that are found to be in violation of legal or regulatory requirements.
                    <br><br>
                    Market Data and Information
                    <br><br>
                    The broker provides market data and information for informational purposes only and does not guarantee the accuracy or completeness of such information.
                    Clients use the provided market data at their own risk.
                    <br><br>
                    Amendments to Terms
                    <br><br>
                    The broker reserves the right to amend these terms and conditions at any time with reasonable notice to clients.
                    Continued use of the brokerage services following any amendments constitutes acceptance of the new terms.
                    <br><br>
                    Dispute Resolution
                    <br><br>
                    Any disputes arising out of or related to these terms and conditions shall be resolved through arbitration in accordance with the rules of the relevant arbitration authority.
                    The arbitration decision shall be final and binding on both parties.
                </p>
            </div>
            <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="flex items-center mb-4">
                    <input name="current_address_different" id="checkbox-1" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="checkbox-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">By checking the box You Agree to Above Terms and Conditions.</label>
                </div>
                <button type="submit" class="w-full text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Finish</button>
            </form>
        </div>
    </div>
</section>

@endsection
