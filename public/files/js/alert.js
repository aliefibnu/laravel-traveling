// Success Alert
function swal_success(text) {
    Swal.fire({
        title: "Success!",
        text: text,
        icon: "success",
        confirmButtonText: "Okay",
    });
}

// Error Alert
function swal_error(text) {
    Swal.fire({
        title: "Error!",
        text: text,
        icon: "error",
        confirmButtonText: "Retry",
    });
}
// Warning Alert
function swal_warning(text) {
    return Swal.fire({
        title: "Warning!",
        text: text,
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes",
        cancelButtonText: "No",
    });
}

// Info Alert
function swal_info(text) {
    return Swal.fire({
        title: "Info!",
        text: text,
        icon: "info",
        confirmButtonText: "Got it",
    });
}

// Question Alert
function swal_confirm(header, text, icon) {
    return Swal.fire({
        title: header,
        text: text,
        icon: icon ?? "question",
        showCancelButton: true,
        confirmButtonText: "Yes",
        cancelButtonText: "No",
    });
}
