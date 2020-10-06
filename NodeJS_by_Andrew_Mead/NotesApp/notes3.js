const fs = require('fs');
const chalk = require('chalk');

const getNotes = () => {
    return 'Your notes...';
};

const addNote = (title, body) => {
    //array
    const notes = loadNotes();

    // const duplicateNotes = notes.filter((note) => note.title === title);

    const duplicateNote = notes.find((note) => note.title === title);

    // const duplicateNotes = notes.filter(
    //     function (note) {
    //         return note.title === title;
    //     }
    // );

    // if(duplicateNotes.length==0)

    /*jshint -W087 */
    debugger;

    if (!duplicateNote) {
        notes.push({
            title: title,
            body: body
        });

        saveNotes(notes);
        console.log('New Note added!');
    } else {
        console.log('Note title taken');
    }
};

const readNote = (title) => {
    const notes = loadNotes();
    const note = notes.find((note) => note.title == title);

    if (note) {
        console.log(chalk.inverse(note.title));
        console.log(note.body);
    } else {
        console.log(chalk.red.inverse('Note not found'));
    }
};

const removeNote = function (title) {
    const notes = loadNotes();
    const notesToKeep = notes.filter((note) => notes.title !== title);

    if (notes.length > notesToKeep.length) {
        console.log(chalk.green.inverse('Note Removed'));
    } else {
        console.log(chalk.red.inverse('No note found'));
    }

    saveNotes(notesToKeep);

};

const saveNotes = (notes) => {
    const dataJSON = JSON.stringify(notes);
    fs.writeFileSync('notes.json', dataJsON);
};

const loadNotes = () => {
    try {
        const dataBuffer = fs.readFileSync('notes.json');
        const dataJSON = dataBuffer.toString();
        return JSON.parse(dataJSON);
    } catch (e) {
        return [];
    }
};

const listNotes = () => {
    const notes = loadNotes();

    console.log(chalk.inverse('Your Notes'));

    notes.forEach((note) => {
        console.log(note.title);
    });
};

module.exports = {
    getNotes: getNotes,
    addNote: addNote,
    removeNote: removeNote,
    listNotes: listNotes,
    readNote: readNote,
};