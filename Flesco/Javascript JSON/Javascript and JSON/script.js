var a = "hello world";

var student = {
    "name": "jatin",
    "roll-no": "3233",
    "degree": "dgv22",
    "subjects": [
        "Intro to com",
        "programing fund",
        "computer vision"
    ],
    "projects" :
    [
        {
            AI : "robotics"
        },
        {
            image_processing : "image analysis"
        }
    ]
};

for(var i=0; i<=student.projects.length; i++)
{
    for(var key in student.projects[i])
    {
        console.log(key);
    }
}