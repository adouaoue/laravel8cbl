@extends('layouts.auth2')
@section('form1')
@if (session()->has('success2'))
<div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
<div class="bg-blue-100 border-t border-b border-red-500 text-red-700 px-4 py-3" role="alert">
    <p class="font-bold">Informational message</p>
    <p class="text-sm">{{session()->get('success2')}}</p>
  </div>
</div> 
@endif

@if (session()->has('success1'))
<div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
<div class="bg-blue-100 border-t border-b border-green-500 text-green-700 px-4 py-3" role="alert">
    <p class="font-bold">Informational message</p>
    <p class="text-sm">{{session()->get('success1')}}</p>
  </div>
</div> 
@endif
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6">
      <h3 class="text-lg leading-6 font-medium text-gray-900">Consultation Information</h3>
      <p class="mt-1 max-w-2xl text-sm text-gray-500">Personal details.</p>
    </div>
    <div class="border-t border-gray-200">
      <dl>
        
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
    <tr>
    <th scope="col" class="px-6 py-3">
    name patient :    </th>
    <th scope="col" class="px-6 py-3">
    num_Dossier :
    </th>
    <th scope="col" class="px-6 py-3">
    date :
    </th>
    <th scope="col" class="px-6 py-3">
    heure :
    </th>
    <th scope="col" class="px-6 py-3">
        Action :
    </th>
    <th scope="col" class="px-6 py-3">
    <span class="sr-only">Edit</span>
    </th>
 
    </tr>
    </thead>
    <tbody> 

        @foreach ($test as $c)
    <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">

        <td class="p-2 border-r">{{$c->nom}}</td>
        <td class="p-2 border-r">{{$c->num_dossier}}</td>
        <td class="p-2 border-r">{{$c->heure}}</td>
        <td class="p-2 border-r">{{$c->date}}</td>
        <td class="p-2 border-r">
          @if($c->stauts=='Approved')
            <label style="color: aquamarine">{{$c->stauts}}</label>
          
          @elseif($c->stauts=='Refuse')
            <label style="color: rgb(255, 0, 0)">{{$c->stauts}}</label>
          
          @elseif($c->stauts=='in Progress')
            <label style="color: rgb(0, 0, 0)">{{$c->stauts}}</label>
        @endif
        </td>
        <td>
           

        </td>
    </tr>
</tbody>
@endforeach
    </table>
    </div>
        </div>
      </dl>
    </div>
  </div>
@endsection