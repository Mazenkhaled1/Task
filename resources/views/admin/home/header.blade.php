@extends('admin.layout')

@section('title')
HomePage
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

    /* Style for update button */
    button.update-btn {
      background-color: #007bff; /* Blue color */
      color: white;
      border: none;
      padding: 6px 12px;
      cursor: pointer;
      border-radius: 4px;
    }

    button.update-btn:hover {
      background-color: #0056b3; /* Darker blue when hovered */
    }

    /* Modal Styling */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); /* Black with opacity */
    }

    .modal-content {
      background-color: white;
      margin: 5% auto;
      padding: 30px;
      border-radius: 8px;
      width: 70%;
      max-width: 800px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .close-btn {
      color: #aaa;
      font-size: 28px;
      font-weight: bold;
      position: absolute;
      top: 10px;
      right: 20px;
    }

    .close-btn:hover,
    .close-btn:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      font-size: 16px;
      font-weight: 600;
      color: #333;
    }

    .form-control {
      border: 1px solid #ddd;
      padding: 10px;
      border-radius: 5px;
      width: 100%;
      font-size: 16px;
      color: #333;
    }

    .form-control:focus {
      border-color: #007bff;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .btn-update {
      background-color: #28a745;
      color: white;
      border: none;
      padding: 12px 20px;
      cursor: pointer;
      border-radius: 5px;
      font-size: 16px;
    }

    .btn-update:hover {
      background-color: #218838;
    }
  </style>
@endsection

@section('main')
<h2 style="text-align: center; width: 100%;">News Information</h2>

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
          <th>slider_title</th>
          <th>slider_description</th>
          <th>video_url</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($home_headers as $home_header)
        <tr>
          <td>{{ $home_header->slider_title }}</td>
          <td>{{ $home_header->slider_description }}</td>
          <td>
            <video width="100" height="100" controls>
                <source src="{{ asset('storage/' . $home_header->video_url) }}" type="video/mp4">
            </video>         
         </td>
          <td>
            <!-- Button to open the popup with the contact ID -->
            <button class="update-btn" onclick="openModal({{ $home_header->id }})">تحديث</button>
          </td>        
        </tr>
        @endforeach
      </tbody>
    </table>
</div>

<!-- Popup Modal Structure -->
<div id="updateModal" class="modal">
  <div class="modal-content">
    <span class="close-btn" onclick="closeModal()">&times;</span>
    <h3 class="text-center mb-4">Update Data</h3>
    <form id="updateForm" action="{{ route('home_header.update', ':id') }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="slider_title">slider_title</label>
        <input type="text" id="slider_title" name="slider_title" class="form-control" value="{{old('slider_title' , $home_header->slider_title)}}"  required>
      </div>

      <div class="form-group">
        <label for="slider_description">slider_description</label>
        <input type="text" id="slider_description" name="slider_description" class="form-control" {{old('slider_description' , $home_header->slider_description)}}  required>
      </div>

      <div class="form-group">
        <label for="video_url">video_url</label>
        <input type="file" id="video_url" name="video_url" class="form-control" >
      </div>
      <button type="submit" class="btn-update">Update</button>
    </form>
  </div>
</div>

@endsection

@section('scripts')
<script>
  function openModal(contactId) {
    // Show the modal
    document.getElementById("updateModal").style.display = "block";

    // Update form action with the selected contact ID
    var formAction = document.getElementById("updateForm").action;
    formAction = formAction.replace(':id', contactId);
    document.getElementById("updateForm").action = formAction;

    // You can populate the form with the current contact data here if needed.
    // For example: document.getElementById('title').value = 'some value';
  }

  function closeModal() {
    // Close the modal
    document.getElementById("updateModal").style.display = "none";
  }
</script>
@endsection
