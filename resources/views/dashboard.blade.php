<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
</head>

<body class="">
    <div class=" relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <!--
          Background backdrop, show/hide based on modal state.

          Entering: "ease-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <!--
              Modal panel, show/hide based on modal state.

              Entering: "ease-out duration-300"
                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                To: "opacity-100 translate-y-0 sm:scale-100"
              Leaving: "ease-in duration-200"
                From: "opacity-100 translate-y-0 sm:scale-100"
                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            -->
                <div
                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mt-4 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                <h3 class=" text-lg font-semibold leading-6 text-gray-900" id="modal-title">Keren
                                    Berhasil Login</h3>
                                <div class="mt-3">
                                    <input type="hidden" {{ $role = Auth::user()->role }}>
                                    @if ($role == 'operator')
                                        <p class="text-sm text-gray-500 font-medium">Selamat datang dan sukses selalu,
                                            aku ramal role kamu adalah Operator</p>
                                    @endif
                                    @if ($role == 'keuangan')
                                        <p class="text-sm text-gray-500 font-medium">Selamat datang dan sukses selalu,
                                            aku ramal role kamu adalah Keuangan</p>
                                    @endif
                                    @if ($role == 'marketing')
                                        <p class="text-sm text-gray-500 font-medium">Selamat datang dan sukses selalu,
                                            aku ramal role kamu adalah <span
                                                class="text-indigo-600 font-semibold text-lg tracking-wide cursor-pointer hover:text-indigo-500 hover:underline hover:underline-offset-4">"Marketing"</span>
                                        </p>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <a href="/logout"
                            class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 sm:ml-3 sm:w-auto">Logout
                            &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="bg-white container-sm col-6 border my-3 rounded px-5 py-3 pb-5">
        <h1>Halo!!</h1>
        <div>Selamat datang di halaman admin</div>
        <div><a href="/logout" class="btn btn-sm btn-secondary">Logout >></a></div>
        <div class="card mt-3">
            <ul class="list-group list-group-flush">
                <input type="hidden" {{ $role = Auth::user()->role }}>
                @if ($role == 'operator')
                    <li class="list-group-item">Menu Operator</li>
                @endif
                @if ($role == 'keuangan')
                    <li class="list-group-item">Menu Keuangan</li>
                @endif
                @if ($role == 'marketing')
                    <li class="list-group-item">Menu Marketing</li>
                @endif
            </ul>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script> --}}
</body>

</html>
