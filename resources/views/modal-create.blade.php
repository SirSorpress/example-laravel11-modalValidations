
<div class="modal" tabindex="-1" id="createModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" id="formCreateTodo" onsubmit="formCreateTodo(event)">
                <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <label>Title</label>
                                <input id="titleFormCreate" class="form-control" type="text" placeholder="Make homework" required>
                                <div id="titleFeedBackCreate"></div>
                            </div>
                            <div class="col-4">
                                <label>Type</label>
                                <select id="type_idFormCreate" class="form-control" required>
                                    <option value="#" selected disabled>select an option</option>
                                    @foreach ($types as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                                </select>
                                <div id="type_idFeedBackCreate"></div>
                            </div>
                            <div class="col-4">
                                <label>Status</label>
                                <select id="status_idFormCreate" class="form-control" required>
                                    <option value="#" selected disabled>select an option</option>
                                    @foreach ($statuses as $status)
                                    <option value="{{$status->id}}">{{$status->name}}</option>
                                    @endforeach
                                </select>
                                <div id="status_idFeedBackCreate"></div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <label>Description</label>
                                <textarea id="descriptionFormCreate" placeholder="Maths homework..." class="form-control" cols="30" rows="3" required></textarea>
                                <div id="descriptionFeedBackCreate"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" >Save changes</button>
                    </div>
                </form>
        </div>
    </div>
  </div>

