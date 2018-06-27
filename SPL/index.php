<?php
    /**
     * php数据结构
     */
    echo '*****************栈 start******************'.PHP_EOL;
    //栈  先进后出，后进先出
    $static = new SplStack();
    //入栈
    $static->push("aa".PHP_EOL);
    $static->push("bb".PHP_EOL);
    //出栈
    echo $static->pop();
    echo $static->pop();
    echo '*****************栈 end******************'.PHP_EOL.PHP_EOL;

    echo '*****************队列 start******************'.PHP_EOL;
    //队列  先进先出，后进后出
    $queue = new SplQueue();
    //入队
    $queue->enqueue("aa".PHP_EOL);
    $queue->enqueue("bb".PHP_EOL);
    //出队
    echo $queue->dequeue();
    echo $queue->dequeue();
    echo '*****************队列 end******************'.PHP_EOL.PHP_EOL;

    echo '*****************堆 start******************'.PHP_EOL;
    //堆  先进先出，后进后出
    $heap = new SplMinHeap();
    //入队
    $heap->insert("aa".PHP_EOL);
    $heap->insert("bb".PHP_EOL);
    //出队
    echo $heap->extract();
    echo $heap->extract();
    echo '*****************堆 end******************'.PHP_EOL.PHP_EOL;

