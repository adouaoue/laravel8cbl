@extends('layouts.auth2')
@section('consu')
<div class="mt-10 sm:mt-0">
    <div>
      <div class="md:col-span-1">
      </div>
      <div class="flex spac-x-2 justify-right">
  
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form method="POST"  enctype="multipart/form-data" action="{{route("consultation.add")}}">
          @csrf
          <div class="shadow overflow-hidden sm:rounded-md">
           
            <div>
              <h1 class="text-blue-600">Rendez-vous</h1>
            </div>          
  
           <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-4">
                  <label for="nom" class="block text-sm font-medium text-gray-700">nom</label>
                  <input type="text" name="nom" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder={{$test1}}  />
                </div>
                <div class="col-span-6 sm:col-span-4">
                  <label for="num_dossier" class="block text-sm font-medium text-gray-700">num_dossier</label>
                  <input type="text" name="num_dossier" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder={{$test2}}  />
                </div> 
                 <div class="col-span-6 sm:col-span-4">
                  <label for="heure" class="block text-sm font-medium text-gray-700">heure</label>
                  <input type="time" name="heure" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="" />
                </div> 
                <div class="col-span-6 sm:col-span-4">
                    <label for="date" class="block text-sm font-medium text-gray-700">date</label>
                    <input type="date" name="date" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="" />
                  </div> 
                  <div class="col-span-6 sm:col-span-4">
                    <label for="stauts" class="block text-sm font-medium text-gray-700"></label>
                    <input type="hidden" value="{{$test}}" name="id_patient" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="" />
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
