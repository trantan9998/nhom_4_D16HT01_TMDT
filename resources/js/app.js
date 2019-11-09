require('./bootstrap');
var availableTags = [
    "ActionScript",
    "AppleScript",
    "Asp",
    "BASIC",
    "C",
    "C++",
    "Clojure",
    "COBOL",
    "ColdFusion",
    "Erlang",
    "Fortran",
    "Groovy",
    "Haskell",
    "Java",
    "JavaScript",
    "Lisp",
    "Perl",
    "PHP",
    "Python",
    "Ruby",
    "Scala",
    "Scheme"
];

$('#keyboard')
    .keyboard()
    .autocomplete({
        source: availableTags
    })
    .addAutocomplete({
        // add autocomplete window positioning
        // options here (using position utility)
        position: {
            of: null,
            my: 'right top',
            at: 'left top',
            collision: 'flip'
        }
    })

    // activate the typing extension
    .addTyping({
        showTyping: true,
        delay: 250
    });
