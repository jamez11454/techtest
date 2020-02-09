@extends ('layouts.app')
@section('content')
<div id="wrapper">
    <table id="customer-list">
        <tr id="headings">
            <td>First Name</td>
            <td>Last Name</td>
            <td>Company</td>
            <td>Chapter Name</td>
            <td>View More</td>
        </tr>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer->First_Name }}</td>
            <td>{{ $customer->Last_Name }}</td>
            <td>{{ $customer->Company }}</td>
            <td>{{ $customer->Chapter_Name }}</td>
            <td><a href="/customers/{{ $customer->id }}">view more...</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
