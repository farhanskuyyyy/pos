    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-transparent mb-0">
                <div class="block-header block-header-default">
                    <h3 class="block-title">View User</h3>
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
                                <div class="row push">
                                    <div class="col-lg-4">
                                        <p class="fs-sm text-muted">
                                            Your account’s vital info. Your username will be publicly visible.
                                        </p>
                                    </div>
                                    <div class="col-lg-8 col-xl-5">
                                        <div class="mb-4">
                                            <label class="form-label" for="name">Name</label>
                                            <input type="text" class="form-control" id="name"
                                                name="name" placeholder="Enter your name.."
                                                value="{{ $user->name ?? '' }}" readonly disabled >
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="email">Email Address</label>
                                            <input type="email" class="form-control" id="email"
                                                name="email" placeholder="Enter your email.."
                                                value="{{ $user->email ?? '' }}" readonly disabled >
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="status">Status</label>
                                            <select name="status" id="status" class="form-control" readonly disabled>
                                                <option value="0" selected>{{ ($user->status == 1) ? 'Active' : 'Inactive'}}</option>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="role">Role</label>
                                            <select name="role" id="role" class="form-control" readonly disabled>
                                                <option value="0" selected>{{ $user->role->name }}</option>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Your Avatar</label>
                                            <div class="mb-4">
                                                <img class="img-avatar" src='{{ ($user->image != null) ? asset("storage/profile/".$user->image) : asset('media/avatars/avatar13.jpg') }}'
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="last_login_date">Last Login Date</label>
                                            <input type="text" class="form-control" id="last_login_date"
                                                name="last_login_date" placeholder=""
                                                value="{{ $user->last_login_date ?? '' }}" readonly disabled >
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="last_login_ip">Last Login IP</label>
                                            <input type="text" class="form-control" id="last_login_ip"
                                                name="last_login_ip" placeholder=""
                                                value="{{ $user->last_login_ip ?? '' }}" readonly disabled >
                                        </div>
                                    </div>
                                </div>
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
