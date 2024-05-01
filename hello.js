function calc(a,b,x)
{
    if(x=='add')
    console.log(a+b)
else if ( x=='subtract')
console.log(a-b)
else if(x=='multiply')
console.log(a*b)
else 
console.log(a/b)
}

calc(10,20, 'add')

let ab ={
    name: 'Brainard',
    place: 'male'

}
for (const key in ab) {
    console.log(ab[key])
        
    }

    function calcfact(a)
    { let fact=1;
        for (let index = 1; index <= a; index++) {

            fact=fact*index;
        }
        console.log(fact)
    }

    calcfact(5)
    calcfact(4)
    calcfact(6)

    let l=["Crazy","Amazing","Fire"]
    let b=["Engines","Foods", "Garments"]
    let c=["Bros","Limited","Hub"]
    /*for (let index = 0; index < 3; index++) {
        for (let i =0; i< 3;i++) {
           for(let j=0;j<3;j++)
           {
            console.log(l[index]+ ' ' +b[i]+ ' '+c[j])
           }
            
        }
        
    }*/
    for (const i of l) {
        for (const j of b){
        for (const k of c)
    {
        
        console.log(i+" "+j+" "+k)
    }}}
        
    arr1=[1,2,8,4]
    arr2=[5,6,7,8]
    console.log(arr1.sort())
    