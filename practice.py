lis = []
with open('data.txt','w') as f1:
    f1.write("1\n4\n34\n2")
with open('data.txt','r') as f1:  
    for i in f1:
        lis.append(int(i.replace('\n','')))
for i in range(0,len(lis)):
    for j in range(i+1,len(lis)):
        if(lis[i]>lis[j]):
            temp = lis[i]
            lis[i] = lis[j]
            lis[j] = temp
           # lis[i],lis[j] = lis[j],lis[i]

print(lis)

