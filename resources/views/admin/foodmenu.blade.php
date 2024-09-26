<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')

  </head>
  <body>
<div class="container-scroller">
        @include('admin.navbar')


    <div style="position: relative; top: 60px; right: -150px">
    <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">

                @csrf
        <div>
            <label >Pengarang</label>
            <input style="color: blue" type="text" name="title" placeholder="Masukan Nama Pengarang" required></input>
        </div>

        <div>
            <label >Penerbit</label>
            <input style="color: blue" type="num" name="price" placeholder="Penerbit" required>
        </div>

        <div>
            <label>Gambar Buku</label>
            <input type="file" name="image" required></input>
        </div>

        <div>
            <label >Judul Buku</label>
            <input style="color: blue" type="text" name="description" placeholder="" required></input>
        </div>

        <div>
            <input style="color: black;"type="submit" value="Save">
        </div>


    </form>


    <div>
        <table bgcolor="black">

            <tr>
                <th style="padding: 30px;">Pengarang</th>
                <th style="padding: 30px;">Penerbit</th>
                <th style="padding: 30px;">Gambar Buku</th>
                <th style="padding: 30px;">Judul Buku</th>
                <th style="padding: 30px;">Action</th>
                <th style="padding: 30px;">Action2</th>
            </tr>
@foreach ($data as $data)

            <tr align="center">
                <td>{{ $data->title }}</td>
                <td>{{ $data->price }}</td>
                <td><img height="200" width="200"src="/foodimage/{{ $data->image }}"</td>
                <td>{{ $data->description }}</td>
                <td><a href="{{ url('/deletemenu',$data->id) }}">Delete</a></td>
                <td><a href="{{ url('/updateview',$data->id) }}">Update</a></td>
            </tr>
@endforeach

        </table>
    </div>

</div>






        @include('admin.adminscript')
  </body>
</html>
