$(document).ready(function() {
    $('#datatable').DataTable({
        language: {
            emptyTable: "Tidak ada data",
            zeroRecords: "Tidak ada data yang cocok ditemukan",
        },
        initComplete: function () {
            if (this.fnGetData().length === 0) {
                $('#datatable').html(`
                    <div style="text-align: center; margin-top: 20px;">
                        <img src="${ASSET_URL}assets/img/empty-data.png" width="25%" alt="No Data">
                        <p style="margin-top: 10px;">Tidak ada data</p>
                    </div>
                `);
            }
        },
        bFilter: true,
        responsive: true,
        processing: true,
        serverSide: true,
        ajax: '/apps/users/get-data',
        columns: [
            {
                title: 'No',
                data: null,
                name: null,
                searchable: false,
                orderable: false,
                width: '5%',
                render: function(data, type, full, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                title: 'Nama',
                data: 'username',
                name: null,
                mRender: (data, type, row) => {
                    return `
                        <div class="d-flex align-items-center">
                            <div class="me-3" style="width: 40px; height: 40px; border-radius: 50%;">
                                <img src="${ ASSET_URL }storage/images/user/${row.image}" width="100%" alt="Profil">
                            </div>
                            <div>
                                <strong>${row.username}</strong>
                                <p class="m-0 p-0 text-muted small">${row.email}</p>
                            </div>
                        </div>
                    `
                }
            },
            {
                title: 'Role',
                data: 'roles',
                name: 'id',
                mRender: (data, type, row, meta) => {
                    return row.roles[0].name
                }
            },
            {
                title: 'Tanggal Aktivasi',
                data: 'email_verified_at_display',
                name: 'email_verified_at',
                searchable: false,

            },
            {
                title: 'Status',
                data: 'is_active',
                name: 'is_active',
                searchable: false,
                mRender: (data, type, row, meta) => {
                    return `<span class="badge bg-${data == true ? 'success' : 'danger'} text-uppercase">${data == true ? 'Aktif' : 'Tidak Aktif'}</span>`
                }
            },
            {
                title: '',
                data: 'hashid',
                name: 'id',
                searchable: false,
                orderable: false,
                render: function(data, type, row, meta) {
                    var render = ``

                    render += `<div class="dropdown">
                        <button type="button" class="btn p-0" data-bs-toggle="dropdown">
                            <i class="fa fa-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/apps/users/edit/${row.hashid}" data-id="${data}">
                                <i class="bx bx-edit-alt me-1"></i> Edit
                            </a>
                            <a class="dropdown-item" href="javascript:void(0);" onclick="deleteUser('${row.hashid}')" data-id="${data}">
                                <i class="bx bx-trash me-1"></i> Delete
                            </a>
                        </div>
                    </div>`

                    return render
                }
            }
        ],
    });

    // function deleteUser(userId) {
    //     Swal.fire({
    //         title: 'Apakah Anda yakin?',
    //         text: 'Pengguna akan dihapus!',
    //         icon: 'warning',
    //         showCancelButton: true,
    //         confirmButtonColor: '#d33',
    //         cancelButtonColor: '#3085d6',
    //         confirmButtonText: 'Ya, hapus!',
    //         cancelButtonText: 'Batal'
    //     }).then((result) => {
    //         if (result.isConfirmed) {
    //             Swal.fire('Berhasil!', 'Pengguna berhasil dihapus.', 'success');
    //         }
    //     });
    // }
});
