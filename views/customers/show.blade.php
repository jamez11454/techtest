@extends ('layouts.app')
@section('content')
<div id="wrapper">
    <table>
        <tr>
            <td class="column1">First Name</td>
            <td>{{ $customer->First_Name }}</td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td>{{ $customer->Last_Name }}</td>
        </tr>
        <tr>
            <td>Company</td>
            <td>{{ $customer->Company }}</td>
        </tr>
        <tr>
            <td>Profession</td>
            <td>{{ $customer->Profession }}</td>
        </tr>
        <tr>
            <td>Chapter Name</td>
            <td>{{ $customer->Chapter_Name }}</td>
        </tr>
        <tr>
            <td>Alt Phone Number</td>
            <td>{{ $customer->Alt_Phone_Number }}</td>
        </tr>
        <tr>
            <td>Fax Number</td>
            <td>{{ $customer->Fax_Number }}</td>
        </tr>
        <tr>
            <td>Cell Number</td>
            <td>{{ $customer->Cell_Number }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $customer->Email }}</td>
        </tr>
        <tr>
            <td>Website</td>
            <td>{{ $customer->Website }}</td>
        </tr>
        <tr>
            <td>Address</td>
            <td>{{ $customer->Address }}</td>
        </tr>
        <tr>
            <td>City</td>
            <td>{{ $customer->City }}</td>
        </tr>
        <tr>
            <td>State</td>
            <td>{{ $customer->State }}</td>
        </tr>
        <tr>
            <td>ZIP</td>
            <td>{{ $customer->ZIP }}</td>
        </tr>
        <tr>
            <td>Substitute</td>
            <td>{{ $customer->Substitute }}</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                @if ($customer->Status === 1) Active
                @else Inactive @endif
            </td>
        </tr>
        <tr>
            <td>Join Date</td>
            <td>{{ $customer->Join_Date }}</td>
        </tr>
        <tr>
            <td>Renewal Date</td>
            <td>{{ $customer->Renewal_Date }}</td>
        </tr>
        <tr>
            <td>Sponsor</td>
            <td>{{ $customer->Sponsor }}</td>
        </tr>
    </table>
    <a id="custom-button" href="/customers"><span class="button is-link">Return</span></a>
</div>
@endsection
