<div class="w-full block mt-8">
    <div class="flex flex-wrap sm:flex-no-wrap justify-between">
        <div class="w-full sm:max-w-sm bg-gray-200 text-center border border-gray-300 rounded px-8 py-6 my-4 sm:my-0">
            <h3 class="text-gray-700 uppercase font-bold">
                <span class="text-4xl">{{ sprintf("%02d", $parents->children_count) }}</span>
                <span class="leading-tight">Children</span>
            </h3>
        </div>
    </div>
</div>

<div class="w-full block mt-4 sm:mt-8">
    <div class="flex flex-wrap sm:flex-no-wrap justify-between">
        @foreach ($parents->children as $key => $children)
            <div class="w-full bg-gray-200 text-center border border-gray-300 rounded px-8 py-6 mb-4 {{ ($key>=1) ? 'ml-0 sm:ml-2' : '' }} {{ ($parents->children_count===1) ? 'sm:max-w-sm' : '' }}">
                <div class="text-gray-700 font-bold">
                    <div class="mb-6">
                        <div class="text-lg uppercase">{{ $children->user->name }}</div>
                        <div class="text-sm lowercase leading-tight">{{ $children->user->email }}</div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="w-1/2 text-sm text-right">Class :</div>
                        <div class="w-1/2 text-sm text-left ml-2">{{ $children->class->class_name }}</div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="w-1/2 text-sm text-right">Role :</div>
                        <div class="w-1/2 text-sm text-left ml-2">{{ $children->roll_number }}</div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="w-1/2 text-sm text-right">Phone :</div>
                        <div class="w-1/2 text-sm text-left ml-2">{{ $children->phone }}</div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="w-1/2 text-sm text-right">Gender :</div>
                        <div class="w-1/2 text-sm text-left ml-2">{{ $children->gender }}</div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="w-1/2 text-sm text-right">Date of Birth :</div>
                        <div class="w-1/2 text-sm text-left ml-2">{{ $children->dateofbirth }}</div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="w-1/2 text-sm text-right">Address :</div>
                        <div class="w-1/2 text-sm text-left ml-2">{{ $children->current_address }}</div>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('attendance.show',$children->id) }}" class="bg-gray-100 inline-block mb-4 text-xs text-gray-600 uppercase font-semibold px-4 py-2 border border-gray-400 rounded">Attendence</a>
                        <a href="{{ route('teacher.attendance.create',$children->id) }}" class="bg-gray-100 inline-block mb-4 text-xs text-gray-600 uppercase font-semibold px-4 py-2 border border-gray-400 rounded">Fees</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div> <!-- ./END PARENT -->