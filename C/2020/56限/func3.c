//  func3.c
//  cl  /W4  func3.c
#include <stdio.h>

void add(int ii, int jj) {
    ii = ii + jj;
    printf("add: %d \n", ii);
}

int main() {
    int i = 10;
    int j = 20;
    add(i, j);
    printf("main: %d \n", i);

    return 0;
}
