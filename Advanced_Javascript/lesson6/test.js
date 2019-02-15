// It allows each object to share the methods while having different properties

var obj = {num:2};
var obj2 = {num:5};

var addToThis = function(a, b, c)
{
    return this.num + a + b+ c;
};

// functionName.call(object, argument);
console.log(addToThis.call(obj,1,2,3));

var arr = [1,2,3];
console.log(addToThis.apply(obj,arr));

var bound = addToThis.bind(obj);

bound(1,2,3);
