<!-- What is functional dependency -->

<!-- Reference - https://www.youtube.com/watch?v=wez3fXrjBAE&list=PLmXKhU9FNesR1rSES7oLdJaNFgmuj0SYV -->

f: alpha -> beta

- Given "alpha" we can search for beta

https://imgur.com/a/Ku21vAu

- the values in alpha should be unique

** if "a" has value 1 , it should not that when we put "a" in the above function it gives us ambiguity for values of beta

<!-- Functional dependency Problems -->

<!-- Reference - https://www.youtube.com/watch?v=y8XuGhEdslM&list=PLmXKhU9FNesR1rSES7oLdJaNFgmuj0SYV&index=2 -->

<!-- What are closure set of attributes -->

<!-- Reference - https://www.youtube.com/watch?v=vs65S6Nku5g&index=4&list=PLmXKhU9FNesR1rSES7oLdJaNFgmuj0SYV -->

<!-- Reference - https://www.youtube.com/watch?v=fT0QMtgqPrU&list=PLmXKhU9FNesR1rSES7oLdJaNFgmuj0SYV&index=5 -->

- attribute closure on an attribute set "A" can be defined as a set of attributes which can be functionally determined from it
- Denoted by F^+

https://imgur.com/a/D2GBaae

<!-- What are Armstrong Rules / Axioms -->

- axiom is a statement that is taken to be true, and serve as a premises or starting point for further arguments

* armstrong axioms holds on very relational databases can be used to generate closure sets

<!-- Primary Rules  -->

1. Reflexity

- If Y is a subset of X , then X -> Y

Eg -

X = ABC
Y = AB

therefore, X -> Y

2. Augmentation

- If X -> Y, then XZ -> YZ

3. Transitivity

- If X->Y and Y->Z, then X->Z

<!-- Secondary Rules -->

1. Union

- If X->Y and X->Z, then X-> YZ

2. Decomposition

- If X->YZ, then X->Y and X->Z

3. PseudoTransitivity

- If X->Y and WY->Z, then WX->Z

4. Composition

- If X->Y and Z->W, then XZ -> YW
