const showAlert = (config) => {
    Swal.fire(config);
};

const addEventListenerToId = (id, configCallback) => {
    document.getElementById(id).addEventListener("click", configCallback);
};

// Configurations for Swal.fire
const configurations = {
    basic: "Any fool can use a computer",
    footer: {
        icon: "error",
        title: "Oops...",
        text: "Something went wrong!",
        footer: "<a href>Why do I have this issue?</a>",
    },
    title: "The Internet?",
    success: {
        icon: "success",
        title: "Success",
    },
    error: {
        icon: "error",
        title: "Error",
    },
    warning: {
        icon: "warning",
        title: "Warning",
    },
    info: {
        icon: "info",
        title: "Info",
    },
    question: {
        icon: "question",
        title: "Question",
    },
    text: {
        title: "Enter your IP address",
        input: "text",
        inputLabel: "Your IP address",
        showCancelButton: true,
    },
    email: {
        title: "Input email address",
        input: "email",
        inputLabel: "Your email address",
        inputPlaceholder: "Enter your email address",
    },
    url: {
        input: "url",
        inputLabel: "URL address",
        inputPlaceholder: "Enter the URL",
    },
    password: {
        title: "Enter your password",
        input: "password",
        inputLabel: "Password",
        inputPlaceholder: "Enter your password",
        inputAttributes: {
            maxlength: 10,
            autocapitalize: "off",
            autocorrect: "off",
        },
    },
    textarea: {
        input: "textarea",
        inputLabel: "Message",
        inputPlaceholder: "Type your message here...",
        inputAttributes: {
            "aria-label": "Type your message here",
        },
        showCancelButton: true,
    },
    select: {
        title: "Select field validation",
        input: "select",
        inputOptions: {
            Fruits: {
                apples: "Apples",
                bananas: "Bananas",
                grapes: "Grapes",
                oranges: "Oranges",
            },
            Vegetables: {
                potato: "Potato",
                broccoli: "Broccoli",
                carrot: "Carrot",
            },
            icecream: "Ice cream",
        },
        inputPlaceholder: "Select a fruit",
        showCancelButton: true,
        inputValidator: (value) => {
            return new Promise((resolve) => {
                if (value === "oranges") {
                    resolve();
                } else {
                    resolve("You need to select oranges :)");
                }
            });
        },
    },
};

// Add event listeners using configurations
for (const [id, config] of Object.entries(configurations)) {
    addEventListenerToId(id, async () => {
        const { value } = await Swal.fire(config);
        if (value) {
            showAlert(`Entered ${id}: ${value}`);
        }
    });
}
