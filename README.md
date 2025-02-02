# Challenge: Crack the Code with Quantum Factorization

Sponsored by
![Quantum Rings](./images/quantum-rings-logo.png)

# 🚀 **Quantum Pioneers: Shor's Algorithm on Quantum Rings**

This repository contains an implementation of **Shor's Algorithm for factoring semiprime numbers** using the **Quantum Rings Simulator**. Our goal is to leverage quantum computation to factor numbers of increasing bit sizes while demonstrating the universality of Shor’s algorithm.

---

## 📌 **Table of Contents**
- [Challenge: Crack the Code with Quantum Factorization](#challenge-crack-the-code-with-quantum-factorization)
- [🚀 **Quantum Pioneers: Shor's Algorithm on Quantum Rings**](#-quantum-pioneers-shors-algorithm-on-quantum-rings)
  - [📌 **Table of Contents**](#-table-of-contents)
  - [🔍 **1. Overview** ](#-1-overview-)
  - [**2. Team Members** ](#2-team-members-)
  - [🧑‍💻 **3. Algorithm Breakdown** ](#-3-algorithm-breakdown-)
    - [⚛️ **3.1 Quantum Part** ](#️-31-quantum-part-)
    - [🖥 **3.2 Classical Part** ](#-32-classical-part-)
  - [⚙️ **4. Implementation Details** ](#️-4-implementation-details-)
  - [📈 **5. Scalability \& Challenges** ](#-5-scalability--challenges-)
    - [🚧 **Current Limitations**](#-current-limitations)
    - [🔧 **Future Improvements**](#-future-improvements)
  - [🌍 **6. Universality** ](#-6-universality-)
  - [7 **Factorization Results**  ](#7-factorization-results--)
  - [⏱ **8. Performance Analysis** ](#-8-performance-analysis-)
- [8-Bit, N = 143](#8-bit-n--143)
- [10-Bit, N = 899](#10-bit-n--899)
- [12-Bit, N = 3127](#12-bit-n--3127)
  - [💡 **9. Key Learnings \& Insights** ](#-9-key-learnings--insights-)
  - [🔮 **10. Future Work** ](#-10-future-work-)
  - [📚 **11. References \& Documentation** ](#-11-references--documentation-)

---

## 🔍 **1. Overview** <a name="overview"></a>

Shor’s algorithm is a **quantum algorithm for integer factorization** that significantly outperforms classical methods. It consists of:

- **Quantum Part**: Uses **modular exponentiation** and the **Quantum Fourier Transform (QFT)** to estimate the period \( r \) of a function related to the number being factored.
- **Classical Part**: Uses the estimated period \( r \) to compute the factors of the given number.

---

## **2. Team Members** <a name="team"></a>

| Name                 | GitHub Username | Email                           |
|----------------------|----------------|--------------------------------|
| **Feroz Ahmad**      | [@Fe-r-oz](https://github.com/Fe-r-oz) | [feroz.ahmad.email@gmail.com](mailto:feroz.ahmad.email@gmail.com)    |
| **Mohammad Abid Hafiz** | [@mohammadabidhafiz1294](https://github.com/mohammadabidhafiz1294) | [s2010722145@ru.ac.bd](mailto:s2010722145@ru.ac.bd)         |
| **Pyae Linn**        | [@PyaeLinn01](https://github.com/PyaeLinn01) | [pyaelinn@uit.edu.mm](mailto:pyaelinn@uit.edu.mm)           |
| **Shin Thant Phyo**  | [@NanGyeThote](https://github.com/NanGyeThote) | [stphyo@uit.edu.mm](mailto:stphyo@uit.edu.mm)             |
| **Ehsan Stp**        | [@Ehsanstp](https://github.com/Ehsanstp) | [unknowns.cov@gmail.com](mailto:unknowns.cov@gmail.com)        |

## 🧑‍💻 **3. Algorithm Breakdown** <a name="algorithm-breakdown"></a>

### ⚛️ **3.1 Quantum Part** <a name="quantum-part"></a>

1. **Initialization**  
   - Two quantum registers:
     - **Counting register** (`n_count` qubits) → Initialized to superposition using Hadamard gates.
     - **Target register** (`target_size` qubits) → Initialized to \( |1\rangle \).

2. **Controlled Modular Exponentiation**  
   - Applies a controlled-U operation:  
     $$U |y\rangle = a^{(2^q)} \mod N$$
   - 🚨 *Current implementation uses a simplified controlled-X gate for modular multiplication. This must be replaced with a proper quantum modular multiplication circuit for scalability.*

3. **Inverse Quantum Fourier Transform (QFT)**  
   - Applied to the counting register to extract the period information.

4. **Measurement**  
   - The counting register is measured, and the observed value is used for phase estimation.

---

### 🖥 **3.2 Classical Part** <a name="classical-part"></a>

1. **Continued Fractions Method**  
   - Converts the measured phase into an estimate for the period $r$.

2. **Factor Computation**  
   - If $r$ is even:
     $$x = a^{(r/2)} \mod N$$
     $$\text{factor}_1 = \gcd(x - 1, N)$$
     $$\text{factor}_2 = \gcd(x + 1, N)$$
   - If $r$ is odd, the quantum process is re-run to obtain a new measurement.

---

## ⚙️ **4. Implementation Details** <a name="implementation-details"></a>

- The algorithm is implemented using the `QuantumRingsLib` library.
- The code iterates through a dictionary of semiprimes to demonstrate universality.

---

## 📈 **5. Scalability & Challenges** <a name="scalability--challenges"></a>

### 🚧 **Current Limitations**

- **Simplified modular exponentiation**: The current controlled-X gate method does not scale well.
- **Quantum noise sensitivity**: The algorithm's accuracy depends on the precision of the measured phase.

### 🔧 **Future Improvements**

- **Implementing an efficient quantum modular multiplication circuit** to improve scalability.
- **Optimizing the continued fractions approach** to handle noise better.

---

## 🌍 **6. Universality** <a name="universality"></a>

- The implementation factors multiple semiprime numbers.
- Expanding the dataset to include larger semiprimes will further validate the algorithm’s universality.

---


## 7 **Factorization Results**  <a name="factorization-results"></a>

| **N (Bit Size)** | **Job Execution Time (s)** | **Qubits Used** | **Estimated Gates** | **Factors** | **Total Time (s)** |
|-----------------|------------------------|--------------|-----------------|-----------|--------------|
| **3127 (12-bit)** | 15.33 | 25 | 781 | 59, 53 | 30.53 |
| **899 (10-bit)** | 8.20 | 21 | 411 | 31, 29 | 9.57 |
| **143 (8-bit)** | 2.86  | 17 | 193 | 11, 13 | 3.29 |

> **Note:** The actual number of gate operations is not available. For more details, contact **Quantum Rings Support**.

## ⏱ **8. Performance Analysis** <a name="performance-analysis"></a>

- Execution time is logged for:
  - Quantum circuit execution
  - Classical factorization steps
- Helps in **identifying bottlenecks** and optimizing performance.

# 8-Bit, N = 143

![image](https://github.com/user-attachments/assets/a9ca2ddb-547e-4d37-8a66-8a8540d5eb17)

# 10-Bit, N = 899

![image](https://github.com/user-attachments/assets/d341e8c3-967b-426e-b08f-bf2daf332234)

# 12-Bit, N = 3127

![image](https://github.com/user-attachments/assets/1dc0464f-882b-4461-8ef4-597c2841d424)

---

## 💡 **9. Key Learnings & Insights** <a name="key-learnings--insights"></a>

- **Continued fractions are critical** for accurate period estimation.
- **Modular exponentiation is the main bottleneck** for scaling to larger numbers.
- **Re-running the quantum step is often necessary** to obtain a valid period \( r \).

---

## 🔮 **10. Future Work** <a name="future-work"></a>

✅ **Replace the simplified modular exponentiation with a scalable quantum modular multiplication circuit.**  
✅ **Extend factorization tests to larger semiprime numbers.**  
✅ **Optimize the quantum Fourier transform implementation for improved accuracy.**  

## 📚 **11. References & Documentation** <a name="refs"></a>

1. 🔗 **11.1 Research & Papers**  

- **Shor’s Algorithm:** P.W. Shor, *Polynomial-Time Algorithms for Prime Factorization and Discrete Logarithms on a Quantum Computer*, SIAM Journal on Computing, 1997. [\[Paper\]](https://arxiv.org/abs/quant-ph/9508027)  
- **Quantum Fourier Transform (QFT):** M. Nielsen & I. Chuang, *Quantum Computation and Quantum Information*, Cambridge University Press, 2010.  
- **Modular Exponentiation in Quantum Circuits:** Vedral, Barenco & Ekert, *Quantum Networks for Elementary Arithmetic Operations*, 1996.  

1. 📖 **11.2 Documentation & Libraries**  

- **QuantumRings Library (Backend for Quantum Simulation)** – [Official Documentation](https://quantumrings.com/docs)  
- **Qiskit (For Reference in Quantum Programming)** – [Qiskit Documentation](https://qiskit.org/documentation/)  
- **NumPy (Classical Number Theory Support)** – [NumPy Docs](https://numpy.org/doc/stable/)  

1. 🛠 **11.3 Implementation Guides**  

- **Building Modular Exponentiation in Quantum Circuits:** [IBM Qiskit Textbook](https://qiskit.org/textbook/ch-algorithms/shor.html)  
- **Implementing Inverse QFT in Quantum Circuits:** [Qiskit Tutorial](https://qiskit.org/textbook/ch-algorithms/quantum-fourier-transform.html)  
- **Quantum Phase Estimation in Shor’s Algorithm:** [Qiskit Community Tutorials](https://github.com/qiskit-community/qiskit-community-tutorials)  

---
