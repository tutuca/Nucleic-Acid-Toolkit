import sys

def Convert(DNA):
    
    # Stip whitespace
    DNA = DNA.strip(' ').upper()
    
    RNA = ''
    for nt in DNA:
        if nt != 'A' and nt != 'C' and nt != 'G' and nt != 'T':
            return 'Error: Query is not DNA!'
        
        if nt == 'A':
            RNA += 'U'
        elif nt =='C':
            RNA += 'G'
        elif nt =='G':
            RNA += 'C'
        elif nt =='T':
            RNA += 'A'
            
    return RNA

print Convert(sys.argv[1])