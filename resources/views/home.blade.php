@extends('layouts.auth')
@section('content')
<div class="flex spac-x-2 justify-right">
  <div>
    <a href="{{ route('post.ajouter') }} " type="button" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Ajouter Un Medecin</a>
  </div>
</div>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
  <div class="table w-full p-2">
      <table class="w-full border">
          <thead>

              <tr class="bg-gray-50 border-b">
                  <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                        Name
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          </svg>
                      </div>
                  </th>
                  <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                        Prenom
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          </svg>
                      </div>
                  </th>
                  <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                        Tell
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          </svg>
                      </div>
                  </th>
                  <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                        Adress
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          </svg>
                      </div>
                  </th>
                  <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                        Departement
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          </svg>
                      </div>
                  </th>
                  <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Spesialite
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Email
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                  <div class="flex items-center justify-center">
                      Action
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      </svg>
                  </div>
              </th>
              </tr>
          </thead>
          <tbody> 
                  @foreach ($posts as $i)
              <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">

                  <td class="p-2 border-r">{{$i->id}}</td>
                  <td class="p-2 border-r">{{$i->prenom}}</td>
                  <td class="p-2 border-r">{{$i->tell}}</td>
                  <td class="p-2 border-r">{{$i->adress}}</td>
                  <td class="p-2 border-r">{{$i->departement}}</td>
                  <td class="p-2 border-r">{{$i->spesialite}}</td>
                  <td class="p-2 border-r">{{$i->email}}</td>

                  <td>
                      <a href="{{ route('post.edit', $i->id ) }}" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">Edit</a>
                      <a  href="{{ route('post.delete', $i->id ) }}" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Remove</a>
                  </td>
              </tr>
          </tbody>
          @endforeach
      </table>
  </div>

@endsection



                    