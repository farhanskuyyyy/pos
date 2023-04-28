<div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
        <div class="block block-rounded block-transparent mb-0">
            <div class="block-header block-header-default">
                <h3 class="block-title">Edit User</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="block-content fs-sm">
                <!-- Show loading indicator while data is being fetched -->
                {{-- <div class="bg-white h-100 d-flex align-items-center justify-content-center position-absolute top-50 start-50 translate-middle">
                    <i class="fa fa-3x fa-cog fa-spin"></i>
                </div> --}}
                <!-- User Profile -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">User Profile</h3>
                    </div>
                    <div class="block-content">
                        @if ($user)
                            @if ($user->role_id == 1)
                                <p>User Can't be Changed</p>
                            @else
                                <form method="POST" enctype="multipart/form-data" wire:submit.prevent="submit">
                                    <div class="row push">
                                        <div class="col-lg-4">
                                            <p class="fs-sm text-muted">
                                                Your account’s vital info. Your username will be publicly visible.
                                            </p>
                                        </div>
                                        <div class="col-lg-8 col-xl-5">
                                            @if($errorMsg)
                                                <span class="text-danger">{{ $errorMsg }}</span>
                                            @enderror
                                            <div class="mb-4">
                                                <label class="form-label" for="name">Name</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Enter your name.." value="{{ $user->name ?? '' }}" wire:model="name">
                                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label" for="email">Email Address</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Enter your email.." value="{{ $user->email ?? '' }}" wire:model="email">
                                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label" for="status">Status</label>
                                                <select name="status" id="status" class="form-control" wire:model="status">
                                                    <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>
                                                        Active</option>
                                                    <option value="0" {{ $user->status == 0 ? 'selected' : '' }}>
                                                        Inactive</option>
                                                </select>
                                                @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label" for="role">Role</label>
                                                <select name="role" id="role" class="form-control" wire:model="role">
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}"
                                                            {{ $user->role_id == $role->id ? 'selected' : '' }}>
                                                            {{ $role->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('role') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label">Your Avatar</label>
                                                <div class="mb-4">
                                                    <img class="img-avatar"
                                                        src="{{ ($user->image != null) ? asset("storage/profile/".$user->image) : asset('media/avatars/avatar13.jpg') }}" alt="">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="avatar" class="form-label">Choose a new
                                                        avatar</label>
                                                    <input class="form-control" type="file"
                                                        id="avatar" name="image" wire:model="image" rules="mimes:jpeg,png,svg,jpg">
                                                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <button type="submit" class="btn btn-alt-primary">
                                                    Update
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        @else
                            <p>User Not Found</p>
                        @endif
                    </div>
                </div>
                <!-- END User Profile -->
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        window.addEventListener('successEdit', (e) => {
            $("#modal-edit").modal('hide');
            One.helpers('jq-notify', {type: 'success', icon: 'fa fa-check me-1', message: "Success Edit User"});
            $('#table-user').DataTable().ajax.reload();
        });
    </script>
@endpush
