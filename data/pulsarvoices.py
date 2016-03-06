'''
Reads pulsar data taken from the CSIRO DAP at
https://data.csiro.au/dap/search?q=pulsars
and interpret according to psrfits format described at
http://www.atnf.csiro.au/people/pulsar/index.html?n=Main.Psrfits
(detailed view at http://www.atnf.csiro.au/people/pulsar/index.html?n=PsrfitsDocumentation.Txt)

Authors: Pulsar Voices team
http://www.the-hackfest.com/events/melbourne-science-hackfest/projects/pulsar-voices/

'''

import numpy as np
import scipy.signal as ss
from scipy.io import wavfile
import matplotlib.pyplot as plt
import glob
import os
import pandas as pd

def write_wavfile(data, fs, filename='pulsarsound.wav'):
    d = np.int16(data * 0.9 / np.max(np.abs(data)) * 32767)
    wavfile.write(filename, int(fs), d)

files = sorted(glob.glob('J*.txt'))
filebase = [os.path.splitext(f)[0] for f in files]

periods = {
'J0006+1834': 0.69374767047,
'J0034-0721': 0.0018771818845850,
'J0206-4028': 0.630550140847,
'J0437-4715': 0.005757451924362137,
'J0857-4424': 0.326774210079,
'J0900-3144': 0.0111096491573889,
'J0941-39': 0.58677841838,
'J1003-4747': 0.30707169975,
'J1224-6407': 0.2164762031209,
'J1300+1240': 0.00621853194840048,
'J1359-6038': 0.12750077685,
'J1453-6413': 0.1794847539641,
'J1637-4553': 0.1187713928329,
'J1703-4851': 1.39640107763,
'J2053-7200': 0.341336231373,
'J2317+1439': 0.0034452510710225
}

for f in filebase:
    # read pulse data
    s = pd.read_csv(f+'.txt', delimiter=' ')
    s_data = np.array(s)[:, 3]
    s_data = s_data[:s_data.size/8]

    period = 1.0/periods[f]
    ts = np.linspace(0, period, s_data.size, endpoint=False)

    # plot our pulsar signal
    plt.figure()
    plt.plot(ts, s_data)
    plt.xlabel('time (s)')
    plt.ylabel('flux')
    plt.title('Pulsar %s radio chirp' % f)
    plt.savefig(f, dpi=72)

    # render as audio

    # From https://en.wikipedia.org/wiki/Frequency_modulation
    m = 1.0
    f_delta = 1.0
    s = np.cos(2*np.pi*100000*ts + 2*np.pi*f_delta*np.cumsum(s_data))

#    p = plt.specgram(s)
#    plt.colorbar()

    write_wavfile(s, 1000, filename=f+'.wav')
