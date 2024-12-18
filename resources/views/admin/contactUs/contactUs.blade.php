@extends('admin.layout')

@section('title')
Contact Us - Form
@endsection

@section('styles')
  <style>
    .center-table-wrapper {
      display: flex;
      justify-content: center;
      align-items: flex-start; /* Align to the top of the page */
      padding-top: 20px; /* Adds space from the top of the page */
    }

    table {
      width: 80%;
      max-width: 900px;
      border-collapse: collapse;
      background-color: white;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin: 0 auto;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 12px 15px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
      color: #333;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    button.delete-btn {
      background-color: red;
      color: white;
      border: none;
      padding: 6px 12px;
      cursor: pointer;
      border-radius: 4px;
    }

    button.delete-btn:hover {
      background-color: darkred;
    }
  </style>
@endsection

@section('main')
<h2 style="text-align: center; width: 100%;">Contact Information</h2>

<div class="center-table-wrapper">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Unit Type</th>
          <th>Message</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($contactUs_form as $form) <!-- Assuming you pass $contacts to this page -->
        <tr>
          <td>{{ $form->name }}</td>
          <td>{{ $form->email }}</td>
          <td>{{ $form->phone }}</td>
          <td>{{ $form->unit_type }}</td>
          <td>{{ $form->message }}</td>
          <td>
            <form action="{{ route('contact.delete', $form->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="delete-btn">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>

@endsection
