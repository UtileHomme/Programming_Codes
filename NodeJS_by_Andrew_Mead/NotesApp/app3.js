const chalk = require("chalk");

const yargs = require("yargs");

// const getNotes = require("./notes.js");

// const msg = getNotes();

// console.log(process.argv);

const notes = require("./notes3.js");

const command = process.argv[2];

// if(command === 'add')
// {
//     console.log('Adding note:');
// }
// else if(command === 'remove')
// {
//     console.log('Removing node:');
// }

//Customize Yargs version
yargs.version("1.1.0");

//Add , remove, read and list notes

//Create Add command

yargs.command({
    command: "add",
    describe: "Add a new note",
    builder: {
        title: {
            describe: "Note title",

            //makes the title to be entered while calling the app
            demandOption: true,
            type: 'string'
        },
        body: {
            describe: "Note body",

            //makes the body to be entered while calling the app
            demandOption: true,
            type: 'string'
        },
    },
    handler(argv) {
        // console.log('Title: ' + argv.title + ' Body: ' + argv.body);
        notes.addNote(argv.title, argv.body);
    },
});

//Create remove command

yargs.command({
    command: "remove",
    describe: "Remove a note",
    builder: {
        title: {
            describe: "Note title",
            demandOption: true,
            type: 'string'
        }
    },
    handler(argv) {
        notes.removeNote(argv.title);
    },
});

//Create read command

yargs.command({
    command: "read",
    describe: "Read a note",
    builder: {
        title: {
            describe: 'Note title',
            demandOption: true,
            type: 'string'
        }
    },
    handler(argv) {
        notes.readNote(argv.title);
    },
});

//Create List command

yargs.command({
    command: "list",
    describe: "List a note",
    handler() {
        notes.listNotes();
    },
});

yargs.parse();

// console.log(yargs.argv);