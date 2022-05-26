@extends('layouts.auth1')
@section('consu')
@if (session()->has('success1'))
<div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
<div class="bg-blue-100 border-t border-b border-green-500 text-green-700 px-4 py-3" role="alert">
    <p class="font-bold">Informational message</p>
    <p class="text-sm">{{session()->get('success1')}}</p>
  </div>
</div> 
@endif
<div class="mt-10 sm:mt-0">
  <div>
    <div class="md:col-span-1">
    </div>
    <div class="flex spac-x-2 justify-right">
  
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form method="POST"  enctype="multipart/form-data" action="{{route("ordonence.addordonence")}}">
        @csrf
        <div class="shadow overflow-hidden sm:rounded-md">
         
          <div>
            <h1 class="text-blue-600">Ajouter un addJointure</h1>
          </div>          

         <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="name_medicament" class="inline text-sm font-medium text-gray-700">name_medicament</label>
                <select id="name_medicament" name="name_medicament" autocomplete="Family_Status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @foreach ($Traitement as $c)
                  <option>{{$c->name_medicament}}</option>
                 @endforeach
                </select>
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="dose" class="inline text-sm font-medium text-gray-700">dose</label>
                <select id="dose" name="dose" autocomplete="Family_Status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option>--</option>
                  <option>1/2</option>
                  <option>1/5</option>
                  <option>1</option>
                </select>
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="t_usage" class="inline text-sm font-medium text-gray-700">t_usage</label>
                <select id="t_usage" name="t_usage" autocomplete="t_usage" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option>--</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
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
