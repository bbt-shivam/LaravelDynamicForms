<x-layouts.app>

<div class="bg-white rounded-xl shadow-sm p-6">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">

        <h1 class="text-xl font-semibold text-gray-800">
            Forms
        </h1>

        <a href="{{ route('forms.create') }}"
           class="px-5 py-2.5 rounded-lg bg-gray-900 text-white font-medium hover:bg-gray-800 transition">
            + Create New Form
        </a>

    </div>

    <!-- Filters -->
    <form method="GET" action="{{ route('forms.index') }}"
          class="grid md:grid-cols-4 gap-4 mb-6">

        <div class="md:col-span-2">
            <input type="text"
                   name="search"
                   value="{{ request('search') }}"
                   placeholder="Search by name..."
                   class="w-full px-4 py-2.5 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-300">
        </div>

        <div>
            <select name="status"
                    class="w-full px-4 py-2.5 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-300">
                <option value="">All Status</option>
                <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>
                    Active
                </option>
                <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>
                    Inactive
                </option>
            </select>
        </div>

        <div class="flex gap-2">
            <button type="submit"
                    class="w-full px-4 py-2.5 rounded-lg bg-gray-900 text-white hover:bg-gray-800 transition">
                Filter
            </button>

            <a href="{{ route('forms.index') }}"
               class="w-full text-center px-4 py-2.5 rounded-lg border border-gray-300 hover:bg-gray-100 transition">
                Reset
            </a>
        </div>

    </form>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">

            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">
                        Name
                    </th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">
                        Status
                    </th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">
                        Created
                    </th>
                    <th class="px-6 py-3 text-right text-sm font-semibold text-gray-600">
                        Actions
                    </th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 bg-white">

                @forelse($forms as $form)
                <tr class="hover:bg-gray-50">

                    <td class="px-6 py-4 text-sm text-gray-800">
                        {{ $form->name }}
                    </td>

                    <td class="px-6 py-4 text-sm">
                        <span class="px-3 py-1 text-xs rounded-full 
                            {{ $form->status === 'active'
                                ? 'bg-green-100 text-green-700'
                                : 'bg-gray-200 text-gray-700' }}">
                            {{ ucfirst($form->status) }}
                        </span>
                    </td>

                    <td class="px-6 py-4 text-sm text-gray-600">
                        {{ $form->created_at->format('d M Y') }}
                    </td>

                    <td class="px-6 py-4 text-right text-sm">
                        <div class="flex justify-end gap-3">

                            <a href="{{ route('forms.edit', $form) }}"
                               class="text-blue-600 hover:text-blue-800 font-medium">
                                Edit
                            </a>

                            <form method="POST"
                                  action="{{ route('forms.destroy', $form) }}"
                                  onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="text-red-600 hover:text-red-800 font-medium">
                                    Delete
                                </button>
                            </form>

                        </div>
                    </td>

                </tr>
                @empty
                <tr>
                    <td colspan="4"
                        class="px-6 py-6 text-center text-sm text-gray-500">
                        No forms found.
                    </td>
                </tr>
                @endforelse

            </tbody>

        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $forms->withQueryString()->links() }}
    </div>

</div>

</x-layouts.app>