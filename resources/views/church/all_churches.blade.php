<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Churches') }}
        </h2>
    </x-slot>

    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="mb-3">
                      <b>Total number of First timers</b>:
                      <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                         {{ $count_first_timers }} &nbsp;&nbsp;&nbsp;
                      </span>
                    </div>
                    
                    
                    
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                              <table class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-100">
                                  <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">
                                      First Timer Details
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">
                                      Invitation Details
                                    </th>
                                    <th scope="col" class="w-70 px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">
                                      Prayer Requests
                                    </th>
                                    <th scope="col" class="w-35 px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">
                                      Time Uploaded
                                    </th>
                                  </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($first_timers_details as $first_timers_detail)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                              <div class="flex items-center">
                                                  <div class="ml-4">
                                                      <div class="text-sm font-medium text-gray-900">
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                          <b>Date</b>
                                                        </span>:&nbsp;{{ $first_timers_detail->date }}<br><br>

                                                          <b>{{ $first_timers_detail->id }}.&nbsp;{{ $first_timers_detail->name }}: {{ $first_timers_detail->gender }}: {{ $first_timers_detail->age }} years</b>:                                                                                                                  
                                                          <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                              <b>Address</b>: {{ $first_timers_detail->address }}
                                                          </span> 
                                                      </div>
                                                      <div class="text-sm text-gray-500">
                                                        <b>Email</b>: {{ $first_timers_detail->email }}
                                                      </div>
                                                      <div class="text-sm text-gray-500">
                                                        <b>Occupation</b>: {{ $first_timers_detail->occupation }}
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                          <b>Marital Status</b>: {{ $first_timers_detail->marital_status }}
                                                        </span>
                                                      </div>
                                                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        <b>Contact</b>: {{ $first_timers_detail->phone_number }}
                                                      </span>
                                                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        <b>Alt Contact</b>: {{ $first_timers_detail->alt_phone_number }}
                                                      </span>
                                                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        <b>Relative Contact</b>: {{ $first_timers_detail->relative_phone_number }}
                                                      </span>
                                                      <br>
                                                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        <b>Salvation Status</b>: {{ $first_timers_detail->salvation_status }} &nbsp; <b>When?</b>: {{ $first_timers_detail->date_of_salvation }}
                                                      </span>
                                                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        <b>Baptism Status</b>: {{ $first_timers_detail->baptism_status }} 
                                                      </span> 
                                                  </div>
                                              </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                              <div class="text-sm text-gray-900"><b>Church</b>:&nbsp;
                                                  {{ $first_timers_detail->zonal_church }}
                                              </div>
                                              <div class="text-sm text-gray-900"><b>Service</b>:&nbsp;
                                                @if( $first_timers_detail->service_type == null)
                                                  {{ $first_timers_detail->other_service_type }}
                                                  @else
                                                  {{ $first_timers_detail->service_type }}
                                                @endif
                                              </div>
                                              <br>
                                              <div class="text-sm text-gray-900"><b>How I came</b>:<br>{{ $first_timers_detail->invitation_medium }}</div>
                                              <div class="text-sm text-gray-900">
                                                <span class="px-2 inline-flex text-xs leading-6 font-bold rounded-full bg-green-100 text-green-800">
                                                <b>Soul winner</b>: {{ $first_timers_detail->name_of_inviter }} 
                                                </span>
                                              </div>
                                              <div class="text-xs text-gray-500"><b>Contact</b>:&nbsp;{{ $first_timers_detail->contact_of_inviter }}</div>
                                              <div class="text-xs text-gray-500"><b>Fellowship</b>:&nbsp;{{ $first_timers_detail->fellowship_of_inviter }}</div>
                                            </td>

                                            <td class="w-50 px-6 py-4">
                                            {{-- <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Active
                                            </span> --}}
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                {{ $first_timers_detail->prayer_requests }}
                                            </span>
                                            </td>

                                            {{-- whitespace-nowrap text-sm text-gray-500 --}}
                                            <td class="w-40 px-6 py-4 text-sm text-gray-500">
                                                {{ $first_timers_detail->created_at->diffForHumans() }}
                                            </td>  
                                        </tr>
                                    @endforeach
                                </tbody>
                              </table>
                            </div>
                            <div class="mt-4">
                                {{ $first_timers_details->links() }}
                            </div>
                          </div>
                        </div>
                      </div>
  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>