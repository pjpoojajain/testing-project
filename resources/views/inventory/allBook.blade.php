@extends('layouts.app-master')

@section('content')

<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>

<h2 style="text-align: center;">Library</h2>
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>ID</th>
      <th>Book Title</th>
      <th>Description</th>
      <th>Author</th>
      <th>Book Category</th>
      <th>Published Year</th>
      <th>Price</th>
      <th>Condition</th>
      <th>Qty</th>
      <th>Action</th>
    </tr>
    @foreach ($data as $bookData)
    <tr>
      <td>{{ $bookData->id }}</td>
      <td>{{ $bookData->title }}</td>
      <td>{{ $bookData->description }}</td>
      <td>{{ $bookData->author }}</td>
      <td>{{ $bookData->category }}</td>
      <td>{{ $bookData->published_year }}</td>
      <td>{{ $bookData->price }}</td>
      <td>{{ $bookData->condition }}</td>
      <td>{{ $bookData->qty }}</td>
      <td>
        <form action="{{ route('inventory.destroy',$bookData->id) }}" method="POST">
   
          <a class="btn btn-info" href="{{ route('inventory.showLibrary',$bookData->id) }}">Show</a>

          <a class="btn btn-primary" href="{{ route('inventory.show',$bookData->id) }}">Edit</a>

          @csrf

          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
</div>

@endsection