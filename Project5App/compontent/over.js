import { StyleSheet, Text, View } from 'react-native';

const App = () => {
  return (
    <View style={styles.container}>
      <Text style={styles.header}>Over</Text>
      <Text style={styles.text}>Deze applicatie is gemaakt om progressie bij te houden over oefeningen zowel is er informatie over de oefeningen.</Text>
      <Text></Text>
      <Text style={styles.text}>Voor meer informatie kunt u contact opnemen met Summa-ICT</Text>
      <Text style={styles.version}> v0.0.1</Text>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#e9f7f7',
    alignItems: 'center',
  },
  header: {
    marginTop: 50,
    fontSize: 40,
    color: 'black',
  },
  text: {
    top: '5%',
    textAlign: 'center',
    color: 'black',
    fontSize: 30,
  },
  version: {
    top: '38%',
    left: '35%',
    textAlign: 'center',
    color: 'black',
    fontSize: 30,
  },
});

export default App;