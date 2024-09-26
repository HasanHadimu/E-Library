<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.admincss')

  </head>
  <body>

<div class="container-scroller">
@include('admin.navbar')



    <div style="position: relative; top: 60px; right: -150px">
    <form action="{{ url('/update', $data->id) }}" method="post" enctype="multipart/form-data">

                @csrf
        <div>
            <label >Pengarang</label>
            <input style="color: blue" type="text" name="title" value="{{ $data->title }}" required></input>
        </div>

        <div>
            <label >Penerbit</label>
            <input style="color: blue" type="num" name="price" value="{{ $data->price }}" required>
        </div>

        <div>
            <label >Judul Buku</label>
            <input style="color: blue" type="text" name="description" value="{{ $data->description }}" required></input>
        </div>

        <div>
            <label>Gambar Buku</label>
            <img height="200" width="200" src="/foodimage/{{ $data->image }}"

        </div>

        <div>
            <label>New Image</label>
            <input type="file" name="image" required></input>
        </div>

        <div>
            <input style="color: black;"type="submit" value="Save">
        </div>


    </form>
    </div>

</div>


    @include('admin.adminscript')

  </body>
</html>
