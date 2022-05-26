@extends('layouts.auth1')
@section('form1')
<div class="mt-10 sm:mt-0">
  <div>
    <div class="md:col-span-1">
    </div>
    <div class="flex spac-x-2 justify-right">

    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form method="POST"  enctype="multipart/form-data" action="{{route("Jointur.addJointure")}}">
        @csrf
        <div class="shadow overflow-hidden sm:rounded-md">
         
          <div>
            <h1 class="text-blue-600">Ajouter un addJointure</h1>
          </div>          

         <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-4">
                <label for="date-consultation" class="block text-sm font-medium text-gray-700">date-consultation</label>
                <input type="date" name="date_consultation" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Prenom" />
              </div>
              <div class="col-span-6 sm:col-span-4">
                <label for="description" class="block text-sm font-medium text-gray-700">description</label>
                <input type="text" name="Description" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="description" />
              </div> 
               <div class="col-span-6 sm:col-span-4">
                <label for="email_address" class="block text-sm font-medium text-gray-700">Jointure</label>
                <input type="file" name="Jointure" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="" />
              </div> 


          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Save
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
@section('showj')
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
  <div class="table w-full p-2">
      <table class="w-full border">
          <thead>

              <tr class="bg-gray-50 border-b">
                  <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                        id
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          </svg>
                      </div>
                  </th>
                  <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                        date_consultation
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          </svg>
                      </div>
                  </th>
                  <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                        description
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          </svg>
                      </div>
                  </th>
                  <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                        jounture
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          </svg>
                      </div>
                  </th>
                  
              </tr>
          </thead>
          <tbody> 
                  @foreach ($Jointur as $s)
              <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
   
                  <td class="p-2 border-r">{{$s->id}}</td>
                  <td class="p-2 border-r">{{$s->date_consultation}}</td>
                  <td class="p-2 border-r">{{$s->Description}}</td>
                  <td class="p-2 border-r">{{$s->Jointure}}</td>
                  <td>
                      <a href="" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">Edit</a>
                      <a   href="" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Remove</a>
                      <a href=" " class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Dossier</a>

                  </td>
              </tr>
          </tbody>
          @endforeach
      </table>
  </div>
@endsection



