<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('LAA Church') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="mb-3">
                      <b>Total number of First timers</b>:
                      <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                         {{ $laa_first_timers_count }}
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
                                  @foreach ($laa_first_timers as $laa_first_timer)
                                      <tr>
                                          <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            <b>Date</b>
                                                        </span>:&nbsp;{{ $laa_first_timer->date }}<br><br>

                                                        <b>{{ $laa_first_timer->id }}.&nbsp;{{ $laa_first_timer->name }}: {{ $laa_first_timer->gender }}: {{ $laa_first_timer->age }} years</b>:                                                                                                                  
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            <b>Address</b>: {{ $laa_first_timer->address }}
                                                        </span> 
                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                      <b>Email</b>: {{ $laa_first_timer->email }}
                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                      <b>Occupation</b>: {{ $laa_first_timer->occupation }}
                                                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        <b>Marital Status</b>: {{ $laa_first_timer->marital_status }}
                                                      </span>
                                                    </div>
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                      <b>Contact</b>: {{ $laa_first_timer->phone_number }}
                                                    </span>
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                      <b>Alt Contact</b>: {{ $laa_first_timer->alt_phone_number }}
                                                    </span>
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                      <b>Relative Contact</b>: {{ $laa_first_timer->relative_phone_number }}
                                                    </span>
                                                    <br>
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                      <b>Salvation Status</b>: {{ $laa_first_timer->salvation_status }} &nbsp; <b>When?</b>: {{ $laa_first_timer->date_of_salvation }}
                                                    </span>
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                      <b>Baptism Status</b>: {{ $laa_first_timer->baptism_status }} 
                                                    </span> 
                                                </div>
                                            </div>
                                          </td>

                                          <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900"><b>Church</b>:&nbsp;
                                                {{ $laa_first_timer->zonal_church }}
                                            </div>
                                            <div class="text-sm text-gray-900"><b>Service</b>:&nbsp;
                                              @if( $laa_first_timer->service_type == null)
                                                {{ $laa_first_timer->other_service_type }}
                                                @else
                                                {{ $laa_first_timer->service_type }}
                                              @endif
                                            </div>
                                            <br>
                                            <div class="text-sm text-gray-900"><b>How I came</b>:<br>{{ $laa_first_timer->invitation_medium }}</div>
                                            <div class="text-sm text-gray-900">
                                              <span class="px-2 inline-flex text-xs leading-6 font-bold rounded-full bg-green-100 text-green-800">
                                              <b>Soul winner</b>: {{ $laa_first_timer->name_of_inviter }} 
                                              </span>
                                            </div>
                                            <div class="text-xs text-gray-500"><b>Contact</b>:&nbsp;{{ $laa_first_timer->contact_of_inviter }}</div>
                                            <div class="text-xs text-gray-500"><b>Fellowship</b>:&nbsp;{{ $laa_first_timer->fellowship_of_inviter }}</div>
                                          </td>

                                          <td class="w-50 px-6 py-4">
                                          <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                              {{ $laa_first_timer->prayer_requests }}
                                          </span>
                                          </td>
                                          <td class="w-40 px-6 py-4 text-sm text-gray-500">
                                              {{ $laa_first_timer->created_at->diffForHumans() }}
                                          </td>  
                                      </tr>
                                  @endforeach
                              </tbody>
                            </table>
                          </div>
                          <div class="mt-4">
                              {{ $laa_first_timers->links() }}
                          </div>
                        </div>
                      </div>
                    </div>
  
                </div>
            </div>
        </div>
    </div>

</x-app-layout>