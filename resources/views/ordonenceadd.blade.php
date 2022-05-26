@extends('layouts.auth1')

@section('showj')




@if (session()->has('success2'))
<div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
<div class="bg-blue-100 border-t border-b border-red-500 text-red-700 px-4 py-3" role="alert">
    <p class="font-bold">Informational message</p>
    <p class="text-sm">{{session()->get('success2')}}</p>
  </div>
</div> 
@endif

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
                        name_medicament
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          </svg>
                      </div>
                  </th>
                  
                  <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                        t_usage
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          </svg>
                      </div>
                  </th>
                  <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                        dose
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          </svg>
                      </div>
                  </th>
                  
              </tr>
          </thead>
          <tbody> 
                  @foreach ($ordonence as $s)
              <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
   
                  <td class="p-2 border-r">{{$s->id}}</td>
                  <td class="p-2 border-r">{{$s->name_medicament}}</td>
                  <td class="p-2 border-r">{{$s->dose}}</td>
                  <td class="p-2 border-r">{{$s->t_usage}}</td>
                  <td>
                      <a   href="{{route('ordonnanc.delete',$s->id)}}" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Remove</a>
                      <td><a href="{{action('OrdocontrollerController@downloadPDF', $s->id)}}">Download PDF</a></td>

                  </td>
              </tr>
          </tbody>
          @endforeach
      </table>
  </div>
@endsection



