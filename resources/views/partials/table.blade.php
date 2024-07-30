<!-- resources/views/admin/project/table.blade.php -->
@include('partials.modal-show')
<table id="mr-table" class="table table-dark table-hover shadow mb-2 mt-3">
    <thead>
        <tr>
            <th scope="col">#id Project</th>
            <th scope="col">Project Title</th>
            <th scope="col" class="d-none d-xl-table-cell">Created at</th>
            <th scope="col" class="d-none d-lg-table-cell">Categories</th>
            <th scope="col" class="{{ Route::currentRouteName() === 'admin.projects.index' ? '' : 'd-none' }}">
                Amministration Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($elements as $element)
            <tr>
                <td>{{ $element->id }}</td>
                <td>{{ $element->title }}</td>
                <td class="d-none d-xl-table-cell">{{ $element->created }}</td>
                <td class="d-none d-lg-table-cell">{{ $element->categories }}</td>
                <td class="{{ Route::currentRouteName() === 'admin.projects.index' ? '' : 'd-none' }}">
                    <div class="d-flex justify-content-center align-items-center">
                        <!-- Amministration Actions -->
                        <a href="#" class="table-icon p-3 m-1 open-modal-info" data-bs-toggle="modal" data-bs-target="#staticBackdropInfo" data-title="{{ $element->title }}" data-description="{{ $element->description }}" data-created="{{ $element->created }}" data-categories="{{ $element->categories }}">
                            <div class="icon-container">
                                <i class="fas fa-info-circle"></i>
                            </div>
                        </a>

                        <a href="{{ route('admin.projects.edit', $element) }}" class="table-icon m-1 pe-2">
                            <div class="icon-container">
                                <i class="fas fa-pencil-alt"></i>
                            </div>
                        </a>
                        <form id="delete-form-{{ $element->id }}" action="{{ route('admin.projects.destroy', $element->id) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-table table-icon" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@include('partials.modal-delete')

