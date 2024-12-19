@extends('admin.layout')

@section('title')
Posts
@endsection
@section('styles')
<style>
  /* Main container styles */
  .center-table-wrapper {
    display: flex;
    flex-direction: column; /* ترتيب العناصر بشكل عمودي */
    align-items: center; /* محاذاة العناصر أفقيًا في المركز */
    padding-top: 30px; /* إضافة مسافة من أعلى الصفحة */
    padding-bottom: 40px;
    margin-top: 20px; /* إضافة مسافة من أعلى الصفحة بحيث لا يكون العنصر ملتصقًا بالأعلى */
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

  /* Add New Post Button */
  .btn-update {
    background-color: #4CAF50;
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
    background-color: #45a049;
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
<h2 style="text-align: center; width: 100%;">Posts Information</h2>

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
    <button class="btn-update" onclick="openAddModal()">Add New Post</button>

    <!-- Table displaying posts -->
    <table>
      <thead>
        <tr>
          <th>Category</th>
          <th>Title</th>
          <th>Description</th>
          <th>Author Name</th>
          <th>Author Image</th>
          <th>Post Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <td>{{ $post->category }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->description }}</td>
          <td>{{ $post->author_name }}</td>
          <td><img src="{{ asset('storage/' . $post->author_image) }}" alt="Author Image" width="100" height="100"></td>
          <td><img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" width="100" height="100"></td>
          <td>
            <!-- Delete button with confirmation -->
            <form action="{{ route('posts.delete', $post->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="delete-btn" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
          </form>
          </td>        
        </tr>
        @endforeach
      </tbody>
    </table>
</div>

<!-- Modal for adding or updating posts -->
<div id="postModal" class="modal">
  <div class="modal-content">
    <span class="close-btn" onclick="closeModal()">&times;</span>
    <h3 class="text-center mb-4" id="modalTitle">Add New Post</h3>
    <form id="postForm" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <label for="category">Category</label>
        <input type="text" id="category" name="category" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" name="description" class="form-control" required></textarea>
      </div>

      <div class="form-group">
        <label for="author_name">Author Name</label>
        <input type="text" id="author_name" name="author_name" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="author_image">Author Image</label>
        <input type="file" id="author_image" name="author_image" class="form-control">
      </div>

      <div class="form-group">
        <label for="image">Image</label>
        <input type="file" id="image" name="image" class="form-control">
      </div>
      <button type="submit" class="btn-update" id="submitBtn">Add Post</button>
    </form>
  </div>
</div>
@endsection
@section('scripts')
<script>
  function openAddModal() {
    // Open the modal for adding new post
    document.getElementById("postModal").style.display = "block";
    document.getElementById("modalTitle").textContent = "Add New Post"; // Set modal title
    document.getElementById("postForm").action = "{{ route('posts.store') }}"; // Set action to store route
    document.getElementById("postForm").reset(); // Reset form fields for new post
    document.getElementById("submitBtn").textContent = "Add Post"; // Change button text to "Add Post"
  }

  function closeModal() {
    // Close the modal
    document.getElementById("postModal").style.display = "none";
  }
</script>
@endsection
