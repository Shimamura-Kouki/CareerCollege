//  array.c
//  cl  array.c
#include <stdio.h>

int main() {
    int i[5] = {1, 2, 3, 4, 5};
    //printf("%d \n", i[0]);
    //printf("%d \n", i[4]);

    for(int j = 0; j < 5; j++) {
        printf("%d \n", i[j]);
    }

    // 6�ڂ̔z���ǉ�
    // XXX �o���Ȃ��I�I�I(��₱�������Ǐo���Ȃ��͂Ȃ�(�����))

    // �z��̌���c��
    // XXX �o���Ȃ��I�I�I

    return 0;
}
