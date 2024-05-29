addScopeJS(["Approach", "Clipboard", "main"], {});

Approach.Clipboard.main = function( config = {}) {
    let $elf = {};
    $elf.config = {
        controls: ".Clipboard .controls",
        container: ".Clipboard",
    };
    overwriteDefaults(config, $elf.config);

    $elf.active    = {};  // state information to show user
    $elf.managed   = {};  // instances of dependency plugins

    $elf.init = function() {
        console.groupCollapsed("Clipboard init");
        console.log("init Clipboard", $elf.config);

        $($elf.config.container).on("click.clipboard", dispatch.code);

        console.groupEnd();
    };

    // Publicly Callable, User Re-assignable Functions
    $elf.call = {
        onCopy:function(container, e={} ){
                    // User hook
                    console.log('Copied');
                }
    };

    // Privileged functions - Exist outside of the constructed object's scope. Available to prototypes.
    let dispatch = {
            code:function(e){
                // when code button is pressed
                let textToCopy = $(`${$elf.config.container}`).find("#copyText").val();
                navigator.clipboard.writeText(textToCopy).then(function () {
                    console.log('Copying to Clipboard');
                }, function(err) {
                    console.log('Could not copy text: ', err);
                });
            },
            copy:function(e){
                // when copy button is pressed
                console.log("hii")                 
                let textToCopy = $(e.target).closest("figure").children("ins").text() //e.target.getAttribute('data-copy');
                navigator.clipboard.writeText(textToCopy).then(function() {
                    console.log('Copying to clipboard');
                }, function(err) {
                    console.log('Could not copy text: ', err);
                });
            },
    };

    $elf.init();
    return $elf;
};

export let Clipboard = Approach.Clipboard.main;

/// Example HTML : 
/// to do