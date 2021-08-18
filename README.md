# StarCorp

### Challenge - Backend Developer

Using SOLID principles, write a program that prints all the numbers from 1 to 100. However, for multiples of 3, instead of the number, print “StarCorp”. For multiples of 5 print "IT". For numbers which are multiples of both 3 and 5, print “StarCorpianos”. 

But here's the catch: you can use only one `if`. No multiple branches, ternary operators or `else`.

### Run Docker

> Prod

```sh
docker image build -t edu/teste-star-corp:latest .
docker run --rm edu/teste-star-corp:latest
```

> Test

```sh
docker image build -t edu/teste-star-corp:test -f DockerfileTest .
docker run --rm edu/teste-star-corp:test
```
