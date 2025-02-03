<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home</title>
</head>

<body class="h-full w-full">
    <x-navbar>Listed User</x-navbar>
    <div class="relative overflow-x-auto max-w-sm mx-auto">
        <table class="w-50 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 font-medium whitespace-nowrap dark:text-white">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3 font-medium whitespace-nowrap dark:text-white">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3 font-medium whitespace-nowrap dark:text-white">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
              @foreach ($listedUsers as $listedUser)
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap dark:text-white">
                    {{ $listedUser['name'] }}
                </th>
                <td class="px-6 py-4 font-medium whitespace-nowrap dark:text-white">
                  {{ $listedUser['email'] }}
                </td>
                <td class="px-6 py-4 font-medium whitespace-nowrap dark:text-white">
                    <a href="/edit/{{ $listedUser->id }}">Edit</a> | 
                    <form action="/delete/{{ $listedUser->id }}" method="POST" style="display:inline;">
                      @csrf
                      <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                    </form>
                </td>
            </tr>
              @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
