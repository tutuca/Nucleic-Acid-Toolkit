import sys
import os

InfilePath = '/home/ubuntu/workspace/TextFiles'
with open(os.path.join(InfilePath, 'RNA_Codon_Table.txt'), 'r') as infile:
    AA = {}
    for line in infile:
        pair = line.strip('\n').split()
        AA[pair[0]] = pair[1]
    infile.close()

def Convert(RNA, AA):
    
    # Stip whitespace
    RNA = RNA.strip(' ').upper()
    
    # Error handling
    if len(RNA) % 3 != 0:
        return 'Error: Query is not divisible by 3!'
    # Error handling
    for nt in RNA:
        if nt != 'A' and nt != 'C' and nt != 'G' and nt != 'U':
            return 'Error: Query is not RNA!'
    
    Protein = ''
    i = 0
    j = 3
    while j <= len(RNA):
        Protein += AA[RNA[i:j]]
        i += 3
        j += 3
    
    return Protein

print Convert(sys.argv[1], AA)