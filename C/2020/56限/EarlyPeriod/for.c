//  for.c
//  cl  for.c
#include <stdio.h>

int main() {
    for(int i = 0; i < 10; i ++) {
        printf("%d \n", i);
    }
    //printf("end: %d \n", i);

    // for.c(12): error C2065: 'i': ��`����Ă��Ȃ����ʎq�ł��B
    for(i = 0; i < 10; i ++) {
        printf("%d \n", i);
    }

    return 0;
}
