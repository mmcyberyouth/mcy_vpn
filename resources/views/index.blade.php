@extends('layouts.app')
@section('content')
<!-- Section Heading -->
<div class="px-4 py-5 max-w-7xl mx-auto sm:px-6 lg:px-8">

    <div class="pb-5 border-b border-gray-200 select-none">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Active VPN  Server List - MCY
        </h3>
        <p class="text-justify mt-2 max-w-4xl text-sm text-gray-600 leading-relaxed">
            မင်္ဂလာပါ။
            ကျွန်တော်တို့ MCY (Myanmar Cyber Youth) Team မှ Internet Censor အဖြတ်ခံနေရချိန်တွင် မူရင်းအင်တာနက်မြန်နှုန်းအတိုင်းအသုံးပြုနိုင်ရန် VPN Server များကိုထောက်ပံပေးပေးနေခြင်းဖြစ်ပါတယ်။
            အသုံးပြုနိုင်သော Server စာရင်းကိုအောက်မှာကြည့်နိုင်ပါတယ်။
        </p>
        <p class="text-justify mt-2 max-w-4xl text-sm text-gray-600 leading-relaxed">
            Server စရိတ်လှူဒါန်းလိုပါက -
            <br>
            လူကြီးမင်းအနေနှင့် Server 1 နာရီစရိတ် 0.6$ မှ ကြိုက်နှစ်သက်သည့်ပမာဏအထိ အောက်ပါ ဖုန်းနံပါတ်များသို့လှူဒါန်းနိုင်ပါတယ်။
<br>
               <span class="text-gray-800">KPay - 09691497838</span>

        </p>
        <!-- Waring -->
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">

                <div class="rounded-md bg-red-100 p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-red-400" x-description="Heroicon name: solid/x-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-red-800">
                                Alert For Server Active Time                                </h3>
                            <div class="mt-2 text-sm text-red-700 leading-relaxed">
                                ည ၁ နာရီမှ မနက် ၆ နာရီအတွင်း VPN Service ရပ်နားမည်ဖြစ်သည်။
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Waring -->
    </div>

</div>

<!-- Server List -->
<div class="flex flex-col items-center mb-5 select-none">
    <!-- VPN Data -->
    @foreach($servers as $server)
    <div class="bg-white overflow-hidden shadow rounded-lg my-2 w-11/12 p-3 border-2 border-green-500"
        v-for="vpn in vpnList"
        key="vpn.id"
        >
        <div class="grid grid-cols-1 divide-y divide-green-500">
            <h3 class="text-lg leading-6 font-medium text-gray-700 py-2 select-none">
                {{$server->name}}Server
            </h3>
            <div class="py-2 text-green-700 font-semibold">
                @if($server->status == 1)
                Active
                @else
                <span class="text-red-700">
                    Closed
                </span>
                @endif
            </div>
        </div>
        <div class="my-3 overflow-x-auto text-gray-800 bg-green-50 p-3 rounded-xl select-all">
            {{$server->key}}
        </div>
    </div>
    @endforeach
</div>

@endsection