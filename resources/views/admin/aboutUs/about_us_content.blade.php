@extends('admin.layout')

@section('title')
AboutUs - Content
@endsection

@section('styles')
<style>
    /* Main container styles */
    .center-table-wrapper {
      display: flex;
      flex-direction: column; 
      align-items: center; 
      padding-top: 30px; 
      padding-bottom: 40px;
      margin-top: 20px; 
    }
  
    /* Table styles */
    table {
      width: 90%;
      max-width: 1100px;
      border-collapse: collapse;
      background-color: #ffffff;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      margin-top: 20px;
    }
  
    th, td {
      padding: 15px 20px;
      text-align: left;
      font-size: 14px;
    }
  
    th {
      background-color: #f5f5f5;
      color: #333;
      font-weight: bold;
    }
  
    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
  
    tr:hover {
      background-color: #f1f1f1;
    }
  
    /* Update Button (Blue Color for Update) */
    .btn-update {
      background-color: #007bff; /* Blue Color */
      color: white;
      border: none;
      padding: 10px 18px;
      cursor: pointer;
      border-radius: 4px;
      font-size: 16px;
      margin-bottom: 20px;
      transition: background-color 0.3s ease;
    }
  
    .btn-update:hover {
      background-color: #0056b3; /* Dark Blue on Hover */
    }
  
    /* Add New Post Button (Green Color for Add New Post) */
    .btn-add-new {
      background-color: #4CAF50; /* Green Color */
      color: white;
      border: none;
      padding: 10px 18px;
      cursor: pointer;
      border-radius: 4px;
      font-size: 16px;
      margin-bottom: 20px;
      transition: background-color 0.3s ease;
    }
  
    .btn-add-new:hover {
      background-color: #45a049; /* Dark Green on Hover */
    }
  
    /* Delete button style */
    .delete-btn {
      background-color: #dc3545;
      color: white;
      border: none;
      padding: 8px 12px;
      cursor: pointer;
      border-radius: 5px;
      font-size: 14px;
      transition: background-color 0.3s ease;
    }
  
    .delete-btn:hover {
      background-color: #c82333;
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
      background-color: rgba(0, 0, 0, 0.5);
    }
  
    .modal-content {
      background-color: white;
      margin: 5% auto;
      padding: 30px;
      border-radius: 8px;
      width: 70%;
      max-width: 800px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      animation: fadeIn 0.4s ease-in-out;
    }
  
    .close-btn {
      color: #aaa;
      font-size: 28px;
      font-weight: bold;
      position: absolute;
      top: 10px;
      right: 20px;
      cursor: pointer;
    }
  
    .close-btn:hover,
    .close-btn:focus {
      color: black;
      text-decoration: none;
    }
  
    /* Form Group and Inputs */
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
      transition: border-color 0.3s ease;
    }
  
    .form-control:focus {
      border-color: #4CAF50;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
    }
  
    /* Fade-in effect for modal */
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
</style>
@endsection

@section('main')
<h2 style="text-align: center; width: 100%;">AboutUs - Content Information</h2>

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
  <!-- Button to add new post (Aligned at the top above the table) -->
  <button class="btn-add-new" onclick="openAddModal()">Add New content</button>
    <table>
      <thead>
        <tr>
          <th>Title</th>
          <th>Description</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($about_us_contents as $about_us_content)
        <tr>
          <td>{{ $about_us_content->title }}</td>
          <td>{{ $about_us_content->description }}</td>
          <td>
            <img src="{{ asset('storage/' . $about_us_content->image) }}" alt="Background Image" width="100" height="100">
          </td>
          <td>
            <button class="btn-update" onclick="openModal({{ $about_us_content->id }})">تحديث</button>
          </td>        
        </tr>
        @endforeach
      </tbody>
    </table>
</div>

<!-- Modal for adding or updating posts -->
<div id="postModal" class="modal">
    <div class="modal-content">
      <span class="close-btn" onclick="closeModal('postModal')">&times;</span>
      <h3 class="text-center mb-4" id="modalTitle">Add New Post</h3>
      <form id="postForm" action="{{ route('about_us_content.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" id="title" name="title" class="form-control" required>
        </div>
  
        <div class="form-group">
          <label for="description">Description</label>
          <textarea id="description" name="description" class="form-control" required></textarea>
        </div>
  
        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" id="image" name="image" class="form-control">
        </div>
        <button type="submit" class="btn-add-new" id="submitBtn">Add Post</button>
      </form>
    </div>
  </div>

<!-- Modal for updating posts -->
<div id="updateModal" class="modal">
  <div class="modal-content">
    <span class="close-btn" onclick="closeModal('updateModal')">&times;</span>
    <h3 class="text-center mb-4">Update Data</h3>
    <form id="updateForm" action="{{ route('about_us_content.update', ':id') }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <input type="text" id="description" name="description" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="image">Image</label>
        <input type="file" id="image" name="image" class="form-control" required>
      </div>
      <button type="submit" class="btn-update">Update</button>
    </form>
  </div>
</div>

@endsection

@section('scripts')
<script>
  function openModal(contactId) {
    document.getElementById("updateModal").style.display = "block";
    var formAction = document.getElementById("updateForm").action;
    formAction = formAction.replace(':id', contactId);
    document.getElementById("updateForm").action = formAction;
  }

  function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
  }

  function openAddModal() {
    document.getElementById("postModal").style.display = "block";
    document.getElementById("modalTitle").textContent = "Add New Post";
    document.getElementById("postForm").action = "{{ route('about_us_content.store') }}";
    document.getElementById("postForm").reset();
    document.getElementById("submitBtn").textContent = "Add Post";
  }
</script>
@endsection
